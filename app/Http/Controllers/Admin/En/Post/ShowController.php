<?php

namespace App\Http\Controllers\Admin\En\Post;


use App\Models\En\Post;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {

        return view('admin.en.post.show', compact('post'));
    }
}
