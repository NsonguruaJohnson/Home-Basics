<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::latest()->paginate(10);
        // dd($posts);
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post){       
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){    
        $this->validate($request, [
            'title' => 'required|max:20',
            'body' => 'required|max:200'
        ], [
            'title.required' => 'Please fill this part',
            'title.max' => 'More than 20 characters entered'
        ]);
        // dd($request->title);
        // dd($request->get('title'));

        Post::create($request->only('title', 'body'));

        // Redirect
        // return redirect()->route('posts.index');
        // return back();
        // session()->flash('status', 'Your post has been created');
        return redirect()
            ->route('posts.index')
            ->with('status', 'Your post has been created'); 
            // status is a key and can be changed to anyother key like success etc.
            // ->withStatus('Your post has been created)
            // ->withSuccess('Your post has been created) then success will be displayed in the view blade
    }
}
