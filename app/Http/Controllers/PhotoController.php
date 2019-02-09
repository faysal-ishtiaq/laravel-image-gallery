<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Photo;

class PhotoController extends Controller
{
    //

    public function show(){
    	return view('imageUpload');
    }

    public function store(Request $request){

    	$this->validate($request,[
    		'upImage' => 'required | mimes:jpeg,jpg,png | max:2048',

    	]);
    	$picture  = $request->file('upImage');
    	$pictureName = time(). '.'.$picture->getClientOriginalExtension();
    	$picture->move('uploads/'.Auth::user()->id,$pictureName);
    	
    	$photo = new Photo;
    	$photo->name= $pictureName;
    	$photo->user_id = Auth::user()->id;
    	$photo->save();
    	return back()->with('success','Image uploaded successfully');
    	// return redirect('/profile')->with('success','Profile picture uploaded');

    }

    public function gallery(){
    	$photos = Photo::all();
    	// dd($photos);
    	return view('gallery',compact('photos'));

    }


}
