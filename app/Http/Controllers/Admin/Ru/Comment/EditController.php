<?php

namespace App\Http\Controllers\Admin\Ru\Comment;

use App\Http\Controllers\Controller;
use App\Models\Ru\Comment;


class EditController extends Controller
{
    public function __invoke(Comment $comment)
    {
        return view('admin.ru.comment.edit', compact('comment'));
    }
}
