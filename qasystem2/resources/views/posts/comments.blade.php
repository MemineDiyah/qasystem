
@foreach ($post->comments as $comment)
    <div>
        <strong>{{$comment->user->name}}</strong>

        <p>{{$comment->content}}</p>

        <form action="{{route('comments.store')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name= "content">
                <input type="hidden" class="form-control" name= "post_id" value="{{ $post->id }}" >
                <input type="hidden" class="form-control" name= "comment_id" value="{{ $comment->id }}">
            </div>
            <button type="submit" class="btn btn-primary">Reply</button>
        </form>
{{--        @include('posts.coments', ['coments'=>$item->replies])--}}
    </div>
@endforeach
