<?php

namespace App\Http\Controllers\Admin\Ru\Tag;

use App\Http\Controllers\Controller;
use App\Models\Ru\Tag;


class ShowController extends Controller
{
    public function __invoke(Tag $tag)
    {

        return view('admin.ru.tag.show', compact('tag'));
    }
}
