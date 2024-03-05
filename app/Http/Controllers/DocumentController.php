<?php

namespace App\Http\Controllers;

use App\Models\Documents;
use App\Models\Version;
use Illuminate\Http\Request;

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

        $fileName = $request->title . $request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs('public', $fileName);

        Documents::create([
            'title' => $request->title,
            'description'=> $request->description,
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

    public function update(Request $request, $id){
        $request->validate([
            'description'=> 'required',
            'file' => 'required|file|mimes:pdf|max:3000'
        ]);

        $exist = Version::where('file_id', $id)->first();

        
        if($exist){
            $fileName = $request->title .'ver' . $exist->ver_id+1 . $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public', $fileName);
            Version::create([
                'file_id' => $id,
                'ver_id' => $exist->ver_id + 1,
                'description' => $request->description,
                'file' => $fileName
            ]);
        }else{
            $fileName = $request->title .'ver1' . $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public', $fileName);
            Version::create([
                'file_id' => $id,
                'ver_id' => 1,
                'description' => $request->description,
                'file' => $fileName
            ]);
        }
        return redirect('home');
    }

    public function delete($id){
        Version::where('file_id', $id)->delete();
        Documents::where('file_id', $id)->delete();
        return redirect('home');
    }

    public function searchProcess(Request $request){
        
        $searchResult = $request->input('search');

        $docs = Documents::where('title', 'like', '%'. $searchResult . '%')->get();

        return view('home', compact('docs'));
    }
}
