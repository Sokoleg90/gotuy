<?php

namespace App\Http\Controllers\Admin\En\Comment;

use App\Http\Controllers\Controller;
use App\Models\En\Comment;

class DestroyController extends Controller
{
    public function __invoke(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('admin.en.comment.index');
    }
}
