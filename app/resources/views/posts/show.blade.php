@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <header class="py-3 mb-4 border-bottom">
        <h1 class="text-primary text-center">&laquo; {{ $post->title }} &raquo;</h1>
        <p class="text-muted">{{ $post->created_at->format('d.m.Y') }}</p>
    </header>
    <div class="mt-4">
        {{ $post->content }}
    </div>
    
    <a href="/" class="btn btn-secondary mt-3">← Назад</a>
</div>
@endsection
