<?php

namespace App\Http\Controllers\Admin\Ru\Post;


use App\Models\Ru\Post;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {

        return view('admin.ru.post.show', compact('post'));
    }
}
