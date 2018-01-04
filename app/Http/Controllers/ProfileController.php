<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){

    	return view('profile.index');
    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(profile $profile)
    {
        return view('profile.index', ['profile'=>$profile]);
    //     return view('posts.show', ['post'=>$post]);
    }
}
