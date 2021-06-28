@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}
            <span><a href="{{ route('admin.posts.edit', $post->id) }}" class="badge badge-warning ml-2">EDIT</a></span>
        </h1>
        @if ($post->category)
            <h3>Category: {{ $post->category->name }}</h3>
        @endif
        @if (count($post->tags) > 0)
            <h4 class="d-inline-block">Tags</h4>
            @foreach ($post->tags as $tag)
            <span class="badge badge-primary">{{ $tag->name }}</span>
            @endforeach
        @endif
        <div>{{ $post->content }}</div>
        <a href="{{ route('admin.posts.index') }}">Back to archive</a>

    </div>
@endsection