<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumsController extends Controller
{
    public function index(){

        $albums=Album::with('photos')->get();  
        return view('albums.index')->with('albums',$albums);
    }

    public function create(){
        return view('albums.create');
    }

    public function store(Request $request){
        
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'cover-image'=>'required',
        ]);

        $filenameWithExtenstion=$request->file('cover-image')->getClientOriginalName();
        $filename=pathinfo($filenameWithExtenstion,PATHINFO_FILENAME); 

        $extension=$request->file('cover-image')->getClientOriginalExtension();

        $filenameToStore= $filename.'_'.time().'.'.$extension;

        $path=$request->file('cover-image')->storeAs('/public/albums',$filenameToStore);
        
        $album=new Album();
        $album->name=$request->input('name');
        $album->description=$request->input('description');
        $album->cover_image=$filenameToStore;
        $album->save();

        return redirect('/albums')->with('success','album created successsully');
     }
     public function show($id){
        $album=Album::with('photos')->find($id);
        return view('albums.show')->with('album',$album);
     }
}

