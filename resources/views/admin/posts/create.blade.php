@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <h1>Create new post</h1>
            
            <form action="{{ route('admin.posts.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="mt-3">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title" id="title">
                </div>
                <div class="mt-3">
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" id="content" cols="3"></textarea>
                </div>

                <div class="mt-3">
                    <input class="btn btn-primary" type="submit" value="Create">
                </div>
            </form>
        </div>
    </div>
@endsection