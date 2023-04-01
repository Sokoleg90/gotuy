<?php

namespace App\Http\Controllers\Admin\En\Category;

use App\Http\Controllers\Controller;
use App\Models\En\Category;


class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('admin.en.category.index', compact('categories'));
    }
}
