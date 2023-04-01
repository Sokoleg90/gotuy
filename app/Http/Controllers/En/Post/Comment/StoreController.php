<?php

namespace App\Http\Controllers\En\Post\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\En\Comment;
use App\Models\En\Post;

class StoreController extends Controller
{
    public function __invoke(Post $post, StoreRequest $request)
    {
        $data = $request->validated();

        $data['post_id'] = $post->id;
        Comment::create($data);
        return redirect()->route('en.post.show', $post->id);
    }
}
