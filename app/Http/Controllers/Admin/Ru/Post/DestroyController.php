<?php

namespace App\Http\Controllers\Admin\Ru\Post;


use App\Models\Ru\Post;

class DestroyController extends BaseController
{
    public function __invoke(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.ru.post.index');
    }
}
