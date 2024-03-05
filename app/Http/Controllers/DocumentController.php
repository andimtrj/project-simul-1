<?php

namespace App\Http\Controllers;

use App\Models\Documents;
use App\Models\Version;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function showAll(){
        $docs = Documents::all();
        return view('home', compact('docs'));
    }

    public function upload(Request $request){
        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'file' => 'required|file|mimes:pdf|max:3000'
        ]);

        $fileName = $request->title . 'ver1' . '.pdf';
        $request->file('file')->storeAs('public', $fileName);

        $document = Documents::create([
            'title' => $request->title,
            'description'=> $request->description,
            'file' => $fileName
        ]);

        Version::create([
            'file_id' => $document->file_id,
            'ver_id' => 1,
            'description' => $request->description,
            'file' => $fileName
        ]);


        return redirect('home');
    }

    public function uploadPage(){
        return view('uploadpage');
    }

    public function versionPage($id){
        $ver = Version::where('file_id', $id)->get();
        return view('versionpage', compact('ver'));
    }

    public function updatePage($id){
        $docs = Documents::findOrFail($id);
        return view('updatepage', compact('docs'));

    }

    public function delete($id){
        Version::where('file_id', $id)->delete();
        Documents::where('file_id', $id)->delete();
        return redirect('home');
    }

    public function update(Request $request, $id){
        $request->validate([
            'description'=> 'required',
            'file' => 'required|file|mimes:pdf|max:3000'
        ]);
        
        $exist = Version::where('file_id', $id)->latest('created_at')->first();
        $document = Documents::find($id);
        $vercount = Version::where('file_id', $id)->count();

        if($vercount >= 2){
            $oldest = Version::where('file_id', $id)->orderBy('created_at', 'asc')->first();
            $version = $oldest->ver_id;
            Version::where('ver_id', $version)->where('file_id', $id)->delete();
            Storage::delete('/public/' . $oldest->file);
        }

        $fileName = $document->title . 'ver' . $exist->ver_id + 1 . '.pdf';
        $request->file('file')->storeAs('public', $fileName);
        Version::create([
            'file_id' => $id,
            'ver_id' => $exist->ver_id + 1,
            'description' => $request->description,
            'file' => $fileName
        ]);
        return redirect('home');
    }

    public function downloaddoc($filename){
        $path = '/public/' . $filename;
        return Storage::download($path, $filename);
    }

}
