<?php

namespace App\Http\Controllers\Admin\Ru\Category;

use App\Http\Controllers\Controller;
use App\Models\Ru\Category;


class ShowController extends Controller
{
    public function __invoke(Category $category)
    {

        return view('admin.ru.category.show', compact('category'));
    }
}
