<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'posts'=>Post::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post=new Post;
        $post-> title = $request-> title;
        $post-> description = $request-> description;

        $post->save();

        return response()->json([
         'message'=> 'Post Created',
         'status'=> 'success',
         'data'=> $post
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json(['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post=Post::find($id);
        $post-> title = $request-> title;
        $post-> description = $request-> description;

        $post->update();

        return response()->json([
         'message'=> 'Post Updated',
         'status'=> 'success',
         'data'=> $post
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
       $post->delete();
       return response()->json([
        'message'=>'post deleted',
        'status'=>'success'
       ]);
    }
}
