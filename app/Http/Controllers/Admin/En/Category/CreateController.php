<?php

namespace App\Http\Controllers\Admin\En\Category;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.en.category.create');
    }
}
