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
                    <h3 class="card-title text-center"><span class="date">{{ $post->created_at->format('d.m.Y') }}</span>

                    <a href="{{ url('/posts/' . $post->id) }}">&laquo;{{ $post->title }}&raquo;</a></h3>

                    @if(!empty($post->author))
                        <p class="text-secondary fst-italic">Автор: {{ $post->author }}</p>
                    @endif
                </header>

                <p class="card-text">{{ \Illuminate\Support\Str::limit($post->content, 155) }}</p>

                <div class="mt-4 d-flex gap-2 align-items-center">
                    <a class="btn btn-primary" href="{{ url('/posts/' . $post->id) }}">Читати далі</a>

                    <form action="/posts/{{ $post->id }}" method="POST" onsubmit="return confirm('Ви впевнені, що хочете видалити цей пост?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Видалити</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <div class="mt-4">
        <a href="{{ url('/posts/create') }}" class="btn btn-primary mt-3">Додати пост</a>
    </div>
</div>
@endsection
