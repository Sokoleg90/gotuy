<?php

namespace App\Http\Controllers\Admin\En\Category;

use App\Http\Controllers\Controller;
use App\Models\En\Category;


class ShowController extends Controller
{
    public function __invoke(Category $category)
    {

        return view('admin.en.category.show', compact('category'));
    }
}
