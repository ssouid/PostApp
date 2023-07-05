<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    public function index()
    {
        $title = __('المقالات');

        $posts = Post::where('status', 'approved')->oldest()->paginate(1);

        return view('admin.posts.index', compact('title','posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = __('create post');

        return view('admin.posts.create' ,compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( StorePostRequest $request)
    {
        $post = Post::create(  $request->validated());

        return redirect()-> route( 'posts.index');

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
    public function update(UpdatePostRequest $request, Post $post)
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
