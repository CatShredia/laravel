@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <h1 class="edit-title">Edit post</h1>
        <h2 class="edit-text">{{ $post->title }}</h2>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('post.update', $post->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="titleInput" class="form-label">Title</label>
                    <input name="title" type="text" class="form-control" id="titleInput" placeholder="Title"
                        value="{{ $post->title }}">
                </div>
                <div class="mb-3">
                    <label for="titleInput" class="form-label">Content</label>
                    <textarea name="content" type="text" class="form-control" id="titleInput"
                        placeholder="Content">{{ $post->content }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="titleInput" class="form-label">Likes</label>
                    <input name="likes" type="number" class="form-control" id="titleInput" placeholder="Likes"
                        value="{{ $post->likes }}">
                </div>
                <!-- TODO: category -->
                <label for="titleInput" class="form-label">Category</label>
                <select required name="category_id" class="form-select" aria-label="Default select example"
                    style="margin-bottom:10px">
                    <option selected>{{ $categories->find($post->category_id)->title }}</option>
                    @foreach ($categories as $category)
                        @if ($category->id != $post->category_id)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endif
                    @endforeach
                </select>
                <!-- TODO: tags -->
                <label for="titleInput" class="form-label">Tags</label>
                <button type="submit" class="btn btn-dark">OK</button>
            </form>

        </div>
    </div>
</div>
@endsection
