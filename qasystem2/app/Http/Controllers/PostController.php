<?php

namespace App\Http\Controllers;

use App\Models\Post;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $posts = Post::all();
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        Post::create($request->all());
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    // public function show(Post $post)
    {
        $post = Post::find($id);
        // $post = Post::findorfail($id);
        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', $post);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        Post::create($request->all());
        return redirect()->route('posts.show');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
    }
}
