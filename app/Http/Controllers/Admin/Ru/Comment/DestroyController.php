<?php

namespace App\Http\Controllers\Admin\Ru\Comment;

use App\Http\Controllers\Controller;
use App\Models\Ru\Comment;


class DestroyController extends Controller
{
    public function __invoke(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('admin.ru.comment.index');
    }
}
