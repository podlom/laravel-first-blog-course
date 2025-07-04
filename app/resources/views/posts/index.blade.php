@extends('layouts.app')

@section('title') Your First Laravel Blog - All Blog Posts @endsection

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
        <h1 class="fs-4 text-center">&laquo;Your First Laravel Blog - All Blog Posts&raquo;</h1>
    </header>

    @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <header class="py-3 mb-4 border-bottom">
                    <h3 class="card-title text-center"><a href="{{ url('/posts/' . $post->id) }}">&laquo;{{ $post->title }}&raquo;</a></h3>
                </header>

                <p class="card-text">{{ \Illuminate\Support\Str::limit($post->content, 155) }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection
