<?php

namespace App\Http\Controllers\Admin\En\Post;

use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\En\Post;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $post = $this->service->Update($data, $post);

        return redirect()->route('admin.en.post.show', compact('post'));
    }
}
