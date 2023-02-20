<?php

namespace App\Http\Controllers\Ru\Post;

use App\Http\Controllers\Controller;

use App\Models\Ru\Category;
use App\Models\Ru\Post;
use Carbon\Carbon;


class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $date = Carbon::parse($post->created_at);
        Carbon::setLocale('ru_RU');
        $categories = Category::all();
        $randomPosts = Post::get()->random(6);
        return view('ru.post.show', compact('post', 'date', 'randomPosts', 'categories'));
    }
}
