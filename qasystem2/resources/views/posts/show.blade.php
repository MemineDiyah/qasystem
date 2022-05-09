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
                            <h3>{{  $post->title }}</h3>
                            <p>{{  $post->content }}</p>
                            <hr>
                            <h4>Comments</h4>
                             @include('posts.comments', ['post' => $post])


{{--                            @foreach($post->comments as $comment)--}}
{{--                                {{ $comment->content }}--}}
{{--                            @endforeach--}}

                            <hr>

                            <form action="{{ route('comments.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <textarea type="text" class="form-control" name= "content"></textarea>
                                    <input type="hidden" class="form-control" name= "post_id" value="{{ $post->id }}">
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    Add Comment
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
