<?php

namespace App\Http\Controllers\En\Category\Post;

use App\Http\Controllers\Controller;
use App\Models\En\Category;
use App\Models\En\Post;

class IndexController extends Controller
{
    public function __invoke(Category $category)
    {
        $posts = $category->posts()->paginate(9);
        $categories = Category::all();
        $randomPosts = Post::get()->random(6);
        return view('en.category.post.index', compact('posts', 'categories', 'randomPosts'));
    }
}
