<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;


class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);
        $categories = Category::all();
        return view('post.index', compact('posts', 'categories'));
    }
}
