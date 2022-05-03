
@foreach ($coments as $item)
    <div>
        <strong>{{$item->user->name}}</strong>
        <p>{{$item->content}}</p>
        <form action="{{route('coments.store')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name= "content">
                <input type="hidden" class="form-control" name= "post_id" value="{{$post->id}}" >
                <input type="hidden" class="form-control" name= "coment_id" value="{{$item->id}}">
            </div>
            <button type="submit" class="btn btn-primary">Reply</button>
        </form>
        @include('posts.coments', ['coments'=>$item->replies])
    </div>
@endforeach
