<?php

namespace App\Http\Controllers\Admin\Ru\Category;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.ru.category.create');
    }
}
