<?php

namespace App\Http\Controllers\Admin\Ru\Post;

use App\Models\Ru\Category;

class EditController extends BaseController
{
    public function __invoke(\App\Models\Ru\Post $post)
    {
        $categories = Category::all();
        return view('admin.ru.post.edit', compact('post', 'categories'));
    }
}
