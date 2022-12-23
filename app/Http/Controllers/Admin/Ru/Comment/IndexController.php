<?php

namespace App\Http\Controllers\Admin\Ru\Comment;

use App\Http\Controllers\Controller;
use App\Models\Ru\Comment;


class IndexController extends Controller
{
    public function __invoke()
    {
        $comments = Comment::all();
        return view('admin.ru.comment.index', compact('comments'));
    }
}
