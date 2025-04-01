@extends('layouts.default')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $post->title }}</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $post->content }}</p>
                        <div class="text-muted small mt-4">
                            <span class="mr-3">Category ID: {{ $post->category_id }}</span>
                            <span>Created: {{ $post->created_at->format('d.m.Y H:i') }}</span>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-outline-primary">Edit</a>
                        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection