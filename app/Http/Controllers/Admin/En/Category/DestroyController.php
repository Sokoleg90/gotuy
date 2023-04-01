<?php

namespace App\Http\Controllers\Admin\En\Category;

use App\Http\Controllers\Controller;
use App\Models\En\Category;


class DestroyController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.en.category.index');
    }
}
