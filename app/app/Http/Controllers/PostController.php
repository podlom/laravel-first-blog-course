<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostController extends Controller
{
    public function create(): View
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        $data = $request->validated(); // Вже пройшло валідацію

        Post::create($data);

        return redirect('/')->with('success', 'Post created!');
    }

    public function index(): View
    {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post): View
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post): View
    {
        return view('posts.edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, Post $post): RedirectResponse
    {
        $data = $request->validated();

        $post->update($data);

        return redirect("/posts/{$post->id}")->with('success', 'Post updated!');
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();

        return redirect('/')->with('success', 'Post deleted!');
    }
}
