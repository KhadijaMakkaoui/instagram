<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //this middleware protect the post pages to not be accessible if the user is not logged in
    public function __construct(){
        $this->middleware('auth');
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){

        $data=request()->validate([
            'caption' => 'required',
            'image' => ['required','image']
        ]);

        $imagePath=request('image')->store('uploads','public');
        auth()->user()->posts()->create([
            'caption' => 'required',
            'image' => $imagePath,
        ]);

        return redirect('/profile/'.auth()->user()->id);
    }
}
