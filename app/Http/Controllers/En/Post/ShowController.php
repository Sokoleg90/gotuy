<?php

namespace App\Http\Controllers\En\Post;

use App\Http\Controllers\Controller;
use App\Models\En\Category;
use App\Models\En\Post;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $date = Carbon::parse($post->created_at);
        Carbon::setLocale('en_EN');
        $categories = Category::all();
        $randomPosts = Post::get()->random(6);
        return view('en.post.show', compact('post', 'date', 'randomPosts', 'categories'));
    }
}
