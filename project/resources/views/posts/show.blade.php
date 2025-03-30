@extends('layouts.default')

@section('content')
    <div class="container" style="padding: 10px">
        <div class="row">

            @foreach ($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                            <!-- Limit the content for brevity -->
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection