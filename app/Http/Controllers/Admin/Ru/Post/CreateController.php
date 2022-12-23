<?php

namespace App\Http\Controllers\Admin\Ru\Post;


use App\Models\Ru\Category;
use App\Models\Ru\Tag;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.ru.post.create', compact('categories', 'tags'));
    }
}
