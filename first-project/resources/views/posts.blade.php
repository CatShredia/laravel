@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row">@foreach ($posts as $post)
        {{ $post->title }}
        <br>
    @endforeach
    </div>
</div>

@endsection