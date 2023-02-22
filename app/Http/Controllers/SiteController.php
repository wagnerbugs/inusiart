<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $posts = Post::with('admin')->orderByDesc('id')->limit(3)->get();
        return view('index', compact('posts'));
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function blog()
    {
        $posts = Post::with('admin')->orderByDesc('id')->get();
        return view('site.blog', compact('posts'));
    }

    public function blogShow($blog)
    {
        //add contagem
        Post::where('slug', $blog)->increment('views');

        $posts = Post::with('admin')->where('slug', '<>', $blog)->orderByDesc('views')->get();
        $post = Post::with('admin')->where('slug', $blog)->first();
        return view('site.blog-details', compact('post', 'posts'));
    }

    public function about()
    {
        return view('site.about');
    }
}
