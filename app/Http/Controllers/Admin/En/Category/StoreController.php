<?php

namespace App\Http\Controllers\Admin\En\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\En\Category;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Category::firstOrCreate($data);
        return redirect()->route('admin.en.category.index');
    }
}
