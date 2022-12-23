<?php

namespace App\Http\Controllers\Ru\Post;

use App\Http\Controllers\Controller;
use App\Models\Ru\Category;
use App\Models\Ru\Post;


class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);
        $randomPosts = Post::get()->random(6);
        $categories = Category::all();
        return view('ru.post.index', compact('posts', 'randomPosts', 'categories'));
    }
}
