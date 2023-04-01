<?php

namespace App\Http\Controllers\Admin\En\Post;

use App\Models\En\Category;
use App\Models\En\Post;

class EditController extends BaseController
{
    public function __invoke(Post $post)
    {
        $categories = Category::all();
        return view('admin.en.post.edit', compact('post', 'categories'));
    }
}
