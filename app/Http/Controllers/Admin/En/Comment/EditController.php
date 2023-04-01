<?php

namespace App\Http\Controllers\Admin\En\Comment;

use App\Http\Controllers\Controller;
use App\Models\En\Comment;

class EditController extends Controller
{
    public function __invoke(Comment $comment)
    {
        return view('admin.en.comment.edit', compact('comment'));
    }
}
