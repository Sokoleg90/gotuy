<?php

namespace App\Http\Controllers\Admin\Ru\Post;


use App\Models\Ru\Category;
use App\Models\Ru\Tag;

class EditController extends BaseController
{
    public function __invoke(\App\Models\Ru\Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.ru.post.edit', compact('post', 'categories', 'tags'));
    }
}
