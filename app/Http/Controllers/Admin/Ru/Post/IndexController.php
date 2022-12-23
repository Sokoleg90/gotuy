<?php

namespace App\Http\Controllers\Admin\Ru\Post;



use App\Models\Ru\Post;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('admin.ru.post.index', compact('posts'));
    }
}
