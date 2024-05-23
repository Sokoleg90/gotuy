<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Post $post, $slug)
    {
        $date = Carbon::parse($post->created_at);
        $post = Post::where('slug', $slug)
            ->firstOrFail();
        Carbon::setLocale('uk_UK');
        return view('post.show', compact('post', 'date', 'post'));
    }
}
