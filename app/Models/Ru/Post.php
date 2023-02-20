<?php

namespace App\Models\Ru;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ru_posts';
    protected $guarded = false;

    public function category()
    {
        return $this->belongsTo(\App\Models\Ru\Category::class, 'category_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(\App\Models\Ru\Comment::class, 'post_id', 'id');
    }
}
