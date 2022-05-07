<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index()
    {
        $comments = Comment::all();

        return view('comments.index', [
            'comments' => $comments
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request, Post $post)
    {
        $validated = $request->validate([
            'post_id' => 'required',
            'content' => 'required',
        ]);

        $validated = Comment::create($request->all());

        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
