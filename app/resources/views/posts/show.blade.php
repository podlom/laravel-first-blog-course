@extends('layouts.app')

@section('title'){{ $post->title }} @if(!empty($post->author)) by: {{ $post->author }}@endif @endsection

@section('content')
<div class="container mt-5">
    <header class="py-3 mb-4 border-bottom">
        <h1 class="text-primary text-center">&laquo;{{ $post->title }}&raquo;</h1>
        <p class="text-muted">{{ $post->created_at->format('d.m.Y') }}</p>

        @if(!empty($post->author))
            <p class="text-secondary fst-italic">Автор: {{ $post->author }}</p>
        @endif
    </header>
    <div class="mt-4">
        {{ $post->content }}
    </div>
    
    <a href="/" class="btn btn-secondary mt-3">← Назад</a>
</div>
@endsection
