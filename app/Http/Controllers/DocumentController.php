<?php

namespace App\Http\Controllers;

use App\Models\Documents;
use App\Models\Version;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{

    public function sortTitleAdmin(Request $request){
        $sortBy = $request->query('sort_by', 'title'); 
        $sortOrder = $request->query('sort_order', 'asc'); 
    
        $docs = Documents::orderBy($sortBy, $sortOrder)->get();
        return view('home', compact('docs'));
    }

    public function sortTitleUser(Request $request){
        $sortBy = $request->query('sort_by', 'title'); 
        $sortOrder = $request->query('sort_order', 'asc'); 
    
        $docs = Documents::orderBy($sortBy, $sortOrder)->get();
        return view('homeUser', compact('docs'));
    }
    

    public function showAll(Request $request){
        // $sortBy = $request->query('sort_by', 'title'); 
        // $sortOrder = $request->query('sort_order', 'asc'); 
    
        // $docs = Documents::orderBy($sortBy, $sortOrder)->get();
        $docs = Documents::all();
        return view('home', compact('docs'));
    }

    public function showAllUser(Request $request){
        // $sortBy = $request->query('sort_by', 'title'); 
        // $sortOrder = $request->query('sort_order', 'asc'); 
    
        // $docs = Documents::orderBy($sortBy, $sortOrder)->get();
        $docs = Documents::all();
        return view('homeUser', compact('docs'));
    }


    public function upload(Request $request){
        $request->validate([
            'title'=> 'required|max: 20|unique:document',
            'description'=> 'required|max:50',
            'file' => 'required|file|mimes:pdf|max:3000'
        ]);

        $fileName = $request->title . 'ver1' . '.pdf';
        $request->file('file')->storeAs('public', $fileName);

        $document = Documents::create([
            'title' => $request->title,
            'description'=> $request->description,
            'file' => $fileName,
            'version' => 1
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
        $doc = Documents::where('file_id', $id)->first();
        return view('viewuser', compact('ver', 'doc'));
    }

    public function versionPageAdmin($id){
        $ver = Version::where('file_id', $id)->get();
        $doc = Documents::where('file_id', $id)->first();
        return view('view', compact('ver', 'doc'));
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
        
        $exist = Version::where('file_id', $id)->latest('created_at')->first();
        $document = Documents::find($id);
        $vercount = Version::where('file_id', $id)->count();

        if($vercount >= 5){
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
        
        Documents::where('file_id', $id)->increment('version');
        return redirect('home');
    }


    public function downloaddoc($filename){
        $path = '/public/' . $filename;
        return Storage::download($path, $filename);
    }

    public function searchProcess(Request $request){
        
        $searchResult = $request->input('search');

        // Sorting
        $sortBy = $request->query('sort_by', 'title'); 
        $sortOrder = $request->query('sort_order', 'asc'); 

        $docs = Documents::where('title', 'like', '%'. $searchResult . '%')
        ->orderBy($sortBy, $sortOrder)
        ->get();

        return view('homeUser', compact('docs'));
    }

    public function searchProcessAdmin(Request $request){
        
        $searchResult = $request->input('search');

        // Sorting
        $sortBy = $request->query('sort_by', 'title'); 
        $sortOrder = $request->query('sort_order', 'asc'); 

        $docs = Documents::where('title', 'like', '%'. $searchResult . '%')
        ->orderBy($sortBy, $sortOrder)
        ->get();

        return view('home', compact('docs'));
    }

    public function delete($id){
        $del = Version::where('file_id', $id)->get();

        foreach($del as $del){
            Storage::delete('/public/' . $del->file);
        }
        Version::where('file_id', $id)->delete();
        Documents::where('file_id', $id)->delete();

        return redirect('home');
    }
}
