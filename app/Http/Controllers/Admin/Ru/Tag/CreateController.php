<?php

namespace App\Http\Controllers\Admin\Ru\Tag;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.ru.tag.create');
    }
}
