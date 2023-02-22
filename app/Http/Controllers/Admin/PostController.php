<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('admin')->orderByDesc('id')->get();
        return view('admin.post.index', compact('posts'));
    }
}
