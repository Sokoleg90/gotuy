<?php

namespace App\Http\Controllers\Admin\En\Comment;

use App\Http\Controllers\Controller;
use App\Models\En\Comment;


class IndexController extends Controller
{
    public function __invoke()
    {
        $comments = Comment::all();
        return view('admin.en.comment.index', compact('comments'));
    }
}
