@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>OUR POSTS</h1>
        <a class="btn btn-primary" href="{{ route('admin.posts.create') }}">Create a new post</a>

        @if (session('deleted'))
            <div class="alert alert-success">
                <strong>{{ session('deleted') }}</strong>
                successfully deleted
            </div>
        @endif

        <table class="table mt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td><a class="btn btn-success" href="{{ route('admin.posts.show', $post->id) }}">SHOW</a></td>
                        <td><a class="btn btn-warning" href="{{ route('admin.posts.edit', $post->id) }}">EDIT</a></td>
                        <td>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <input type="submit" class="btn btn-danger" value="DELETE">
                            </form>
                        </td>
                    </tr>                    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection