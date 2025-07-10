@extends('layouts.app')

@section('title'){{ $post->title }} @if(!empty($post->author)) by: {{ $post->author }}@endif @endsection

@section('content')
    <div class="container mt-5">
        <div class="messages-container flash-messages">
            @if (session('success'))
                <div class="alert alert-success mt-4">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <h1>Edit Post &laquo;{{ $post->title }}&raquo; @if(!empty($post->author)) by: {{ $post->author }}@endif</h1>

        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" value="{{ $post->title }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Content</label>
                <textarea name="content" rows="5" class="form-control">{{ $post->content }}</textarea>
            </div>

            <div class="mb-3">
                <label>Author</label>
                <input type="text" name="author" value="{{ $post->author }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Update Post</button>
        </form>
    </div>
@endsection
