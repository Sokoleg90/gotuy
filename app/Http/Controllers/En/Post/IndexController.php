<?php

namespace App\Http\Controllers\En\Post;

use App\Http\Controllers\Controller;
use App\Models\En\Category;
use App\Models\En\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(9);
        $randomPosts = Post::get()->random(6);
        $categories = Category::all();
        return view('en.post.index', compact('posts', 'randomPosts', 'categories'));
    }
}
