<?php

namespace App\Http\Controllers\Admin\En\Post;

use App\Models\En\Post;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('admin.en.post.index', compact('posts'));
    }
}
