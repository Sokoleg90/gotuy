<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;


class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(6);

        return view('post.index', compact('posts', ));
    }
}
