<?php

namespace App\Http\Controllers\Admin\Ru\Post;

use App\Models\Ru\Category;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('admin.ru.post.create', compact('categories'));
    }
}
