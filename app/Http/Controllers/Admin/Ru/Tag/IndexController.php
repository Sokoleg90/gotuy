<?php

namespace App\Http\Controllers\Admin\Ru\Tag;

use App\Http\Controllers\Controller;
use App\Models\Ru\Tag;


class IndexController extends Controller
{
    public function __invoke()
    {
        $tags = Tag::all();
        return view('admin.ru.tag.index', compact('tags'));
    }
}
