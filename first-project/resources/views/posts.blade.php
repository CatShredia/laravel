@extends('layouts.default')
@section('content')
    @foreach ($posts as $post)
        {{ $post->title }}
        <br>
    @endforeach
@endsection
