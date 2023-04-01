<?php

namespace App\Http\Controllers\Admin\En\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\En\Category;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        return redirect()->route('admin.en.category.show', compact('category'));
    }
}
