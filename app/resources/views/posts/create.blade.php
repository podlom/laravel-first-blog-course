@extends('layouts.app')

@section('title') Create Post @endsection

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

        <h1>Create Post</h1>

        <form action="/posts" method="POST">
            @csrf
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Content</label>
                <textarea name="content" class="form-control" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label>Author</label>
                <input type="text" name="author" class="form-control" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Create Post</button>
            </div>
        </form>
    </div>
@endsection
