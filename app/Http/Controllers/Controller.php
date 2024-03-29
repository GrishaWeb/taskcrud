<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function index()
    {
        $posts = Post::paginate(10);
        return view('posts.index', compact('posts'));
    }
}
