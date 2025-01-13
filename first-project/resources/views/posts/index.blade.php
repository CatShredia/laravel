@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @foreach ($posts as $post)
                    <a href="{{ route('post.show', $post->id) }}" class="post-link">
                        <div class="post-title btn">{{ $post->title }}
                        </div>
                    </a>

                    <br>
                @endforeach
            </div>


            <div class="col">
                <a class="create_post_button" href="{{ route('create.create') }}">Создать пост</a>
            </div>
        </div>
    </div>
@endsection
