@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <div>{{ $post->content }}</div>
        <a href="{{ route('admin.posts.index') }}">Back to archive</a>

    </div>
@endsection