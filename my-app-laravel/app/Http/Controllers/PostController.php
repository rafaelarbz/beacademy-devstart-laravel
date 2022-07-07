<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $user;
    protected $posts;

    public function __construct(User $user, Post $posts)
    {
        $this->user = $user;
        $this->posts = $posts;
    }

    public function index()
    {

        $posts = Post::paginate(5);

        return view('posts.index', compact('posts'));

    }

    public function show($userId)
    {
        if(!$user = $this->user->find($userId))
            return redirect()->back();
        
        $posts = $user->posts()->get();

        return view('posts.show', compact('user', 'posts'));

    }
}
