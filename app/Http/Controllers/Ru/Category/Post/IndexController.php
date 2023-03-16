<?php

namespace App\Http\Controllers\Ru\Category\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Ru\Category;


class IndexController extends Controller
{
    public function __invoke(Category $category)
    {
        $posts = $category->posts()->paginate(9);
        $categories = Category::all();
        $randomPosts = Post::get()->random(6);
        return view('ru.category.post.index', compact('posts', 'categories', 'randomPosts'));
    }
}
