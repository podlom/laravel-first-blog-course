@extends('layouts.app')

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

    <header class="py-3 mb-4 border-bottom">
        <h1 class="fs-4 text-center">Your First Laravel Blog - All Blog Posts</h1>
    </header>

    @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <header class="py-3 mb-4 border-bottom">
                    <h3 class="card-title"><span class="date">{{ $post->created_at->format('d.m.Y') }}</span> &laquo;{{ $post->title }}&raquo;</h3>
                </header>

                <p class="card-text">{{ \Illuminate\Support\Str::limit($post->content, 150) }} ...</p>
            </div>
        </div>
    @endforeach
</div>
@endsection
