<?php

namespace App\Http\Controllers\Admin\Ru\Tag;

use App\Http\Controllers\Controller;
use App\Models\Ru\Tag;


class DestroyController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.ru.tag.index');
    }
}
