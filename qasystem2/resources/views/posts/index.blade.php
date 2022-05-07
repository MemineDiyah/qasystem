@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justfy-content-center">
        <div class="col-md-12">
            <h1>Posts</h1>
            <a href="{{ route('posts.create' )}}" class="btn btn-success" style="float: right">Add post</a>
            @php
                $i= 0;
            @endphp
            <table class="table">
                <thead>
                  <tr>
                    <td scope="col">#</td>
                    <td scope="col">Id</td>
                    <td scope="col">Title</td>
                    <td scope="col">Content</td>
                    <td scope="col">Action</td>
                  </tr>
                </thead>
                @foreach ($posts as $post)
                <tbody>
                    <tr>
                        <td>{{$i++}}</td>
                        <td scope="col">{{$post->id}}</td>
                        <td scope="col">{{$post->title}}</td>
                        <td scope="col">{{$post->content}}</td>
                        <td scope="col">
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-daanger">
                                show
                            </a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
              </table>
        </div>
    </div>
</div>
@endsection
