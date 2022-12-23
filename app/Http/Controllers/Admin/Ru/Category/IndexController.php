<?php

namespace App\Http\Controllers\Admin\Ru\Category;

use App\Http\Controllers\Controller;
use App\Models\Ru\Category;


class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('admin.ru.category.index', compact('categories'));
    }
}
