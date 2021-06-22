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
                    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ $post->title }}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="content">Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" cols="3">{{ $post->content }}</textarea>
                    @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="category_id">Category</label>
                    <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
                        <option value="">-- Select Category --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                @if ($category->id == old('category_id', $post->category_id)) selected @endif    
                                >
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mt-3">
                    <input class="btn btn-primary" type="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
@endsection