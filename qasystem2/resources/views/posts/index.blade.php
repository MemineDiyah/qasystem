@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justfy-content-center">
        <div class="col-md-12">
            <h1>Posts</h1>
            <a href="{{route('posts.create')}}" class="btn btn-success" style="float: right">Add post</a>
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
                @foreach ($posts as $item)
                <tbody>
                    <tr>
                        <td>{{$i++}}</td>
                        <td scope="col">{{$item->id}}</td>
                        <td scope="col">{{$item->title}}</td>
                        <td scope="col">{{$item->content}}</td>
                        <td scope="col"><a href="{{ route('posts.show', [$item->id]) }}" class="btn btn-daanger">show </a> </td>
                    </tr>
                </tbody>
                @endforeach
              </table>
        </div>
    </div>
</div>
@endsection
