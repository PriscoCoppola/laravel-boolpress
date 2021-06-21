@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <h1>Edit new post</h1>
            
            <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="mt-3">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ $post->title }}">
                </div>
                <div class="mt-3">
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" id="content" cols="3">{{ $post->content }}</textarea>
                </div>

                <div class="mt-3">
                    <input class="btn btn-primary" type="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
@endsection