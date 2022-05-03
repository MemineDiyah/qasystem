@extends('layouts.app')

@section('content')
    <h1>New post</h1>
        <div class="container">
            <div class="row justfy-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                            <div class="card-body">
                                <form action="{{route('posts.store')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                                        <input type="text" class="form-control" name= "title" placeholder="title" required>
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                                        <textarea class="form-control" name="content" required rows="3"></textarea>
                                      </div>
                                      <button type="submit" class="btn btn-primary">Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
