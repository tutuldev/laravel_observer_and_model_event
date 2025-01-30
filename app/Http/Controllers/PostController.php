<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // create post with slug
        // $post_title = "This is just testing";
        // $post_slug =Str::slug($post_title,"-");
        // // echo $post_slug;
        // Post::create ([
        //     'title'=>$post_title,
        //     'slug'=>$post_slug,
        //     'description'=> "lorem ipsum dolor sit amet consetetur",
        //     'user_id'=>1,
        // ]);

        // create slug by ovserver
        $post_title = "This is another testing";
        $post_slug =Str::slug($post_title,"-");
        // echo $post_slug;
        Post::create ([
            'title'=>$post_title,
            'description'=> "lorem ipsum dolor sit amet consetetur",
            'user_id'=>2,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
