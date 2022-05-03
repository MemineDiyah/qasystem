@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <div class="card-body">
                            <h2 class="text-center text-primary">Q & A system</h2>
                            <br>
                            <h3>{{$post->title}}</h3>
                            <p>{{$post->content}}</p>
                            <hr>
                            <h4>Comments</h4>
                            {{-- @include('posts.coments', ['post' => $post]) --}}
                            {{-- @include('posts.coments', ['coments'=>$post->coments, 'post_id'=>$post->id]) --}}
                            <hr>
                            <form action="{{route('coments.store')}}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <textarea type="text" class="form-control" name= "content"></textarea>
                                    <input type="hidden" class="form-control" name= "post_id" value="{{$post->id}}" >
                                </div>
                                <button type="submit" class="btn btn-primary">Add coment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
