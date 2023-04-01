<?php

namespace App\Http\Controllers\Admin\En\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Comment\UpdateRequest;
use App\Models\En\Comment;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Comment $comment)
    {
        $data = $request->validated();
        $comment->update($data);
        return redirect()->route('admin.en.comment.index');
    }
}
