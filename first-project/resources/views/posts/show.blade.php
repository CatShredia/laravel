@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <h1 class="show-title">{{ $post->title }}</h1>
    </div>
    <div class="row">
        <p class="show-title">{{ $post->content }}</p>
        <p class="show-title">{{ $post->likes }}</p>
        <p class="show-category">Category: <b>{{ $category->title }}</b></p>

        <a href="{{ route('post.edit', $post->id) }}" class="edit btn btn-dark" style="margin-bottom: 10px">Edit
            post</a>
        <form action="{{ route('post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="delete btn btn-dark" style="margin-bottom: 10px">Delete</button>
        </form>
        <a href="{{ route('post.index') }}" class="show-back btn btn-dark">Back</a>
    </div>
</div>
@endsection