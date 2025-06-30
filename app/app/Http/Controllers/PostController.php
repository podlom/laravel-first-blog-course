<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
}
