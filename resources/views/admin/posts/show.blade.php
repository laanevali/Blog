@extends('layout')
@section('title', 'View ' . $post->title)

@section('content')
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <td>{{ $post->id }}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ $post->title }}</td>
        </tr>
        <tr>
            <th>Content</th>
            <td>{{ $post->body }}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ $post->created_at }}</td>
        </tr>
        <tr>
            <th>Updated At</th>
            <td>{{ $post->updated_at }}</td>
        </tr>
    </table>
@endsection
