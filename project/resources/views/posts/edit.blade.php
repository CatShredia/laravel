@extends('layouts.default')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Post</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('post.update', $post->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                    name="title" value="{{ old('title', $post->title) }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" id="content"
                                    name="content" rows="5" required>{{ old('content', $post->content) }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select class="form-control @error('category_id') is-invalid @enderror" id="category_id"
                                    name="category_id" required>
                                    @for($i = 1; $i <= 10; $i++)
                                                                <option value="{{ $i }}" {{ $post->category_id == $i ?
                                        'selected' : '' }}>
                                                                    Category {{ $i }}
                                                                </option>
                                    @endfor
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Update Post</button>
                                <a href="{{ route('post.show', $post->id) }}" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection