<?php

namespace App\Http\Controllers\Admin\En\Post;

use App\Models\En\Category;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('admin.en.post.create', compact('categories'));
    }
}
