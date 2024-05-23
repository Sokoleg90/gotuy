<?php

namespace App\Http\Controllers\Category\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke(Category $category, $slug)
    {
        $posts = $category
            ->where('slug', $slug)
            ->firstOrFail()
            ->posts()
            ->orderBy('created_at', 'DESC')
            ->paginate(9);

        return view('category.post.index', compact('posts'));
    }
}
