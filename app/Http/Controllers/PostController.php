<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePost;
use App\Http\Requests\EditPost;
use App\Http\Requests\UpdatePost;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        // public function index(){
        //   $posts = DB::table('posts')->get();
        //   return view('posts',compact('posts'));
        // }

        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePost $request)
    {
        Post::create([
            'user_id'=>Auth::user()->id,
            'title'=>$request->get('title'),
            'languages'=>$request->get('languages'),
            'description'=>$request->get('description'),
        ]);

        return view('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.balde', ['post'=>$post]);
        // return view('posts.show', ['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(EditPost $request, Post $post)
    // {
    //     return view('posts.edit', ['post'=>$post]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdatePost $request, Post $post)
    // {
    //     $data = [
    //         'title'=>$request->get('title'),
    //         'languages'=>$request->get('languages'),
    //         'description'=>$request->get('description'),
    //     ];

    //     $post->update($data);

    //     return view('/posts/'.$post->id);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(EditPost $request, Post $post)
    // {
    //     $post->delete();

    //     return view('/posts');
    // }
}
