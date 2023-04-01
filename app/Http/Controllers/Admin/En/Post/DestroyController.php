<?php

namespace App\Http\Controllers\Admin\En\Post;

use App\Models\En\Post;

class DestroyController extends BaseController
{
    public function __invoke(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.en.post.index');
    }
}
