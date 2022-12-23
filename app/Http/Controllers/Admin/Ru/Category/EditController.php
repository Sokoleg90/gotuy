<?php

namespace App\Http\Controllers\Admin\Ru\Category;

use App\Http\Controllers\Controller;
use App\Models\Ru\Category;


class EditController extends Controller
{
    public function __invoke(Category $category)
    {
        return view('admin.ru.category.edit', compact('category'));
    }
}
