<?php

namespace App\Http\Controllers\Admin\Ru\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Models\Ru\Tag;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Tag $tag)
    {
        $data = $request->validated();
        $tag->update($data);
        return redirect()->route('admin.ru.tag.show', compact('tag'));
    }
}
