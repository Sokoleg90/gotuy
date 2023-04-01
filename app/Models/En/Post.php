<?php

namespace App\Models\En;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'en_posts';
    protected $guarded = false;

    public function category()
    {
        return $this->belongsTo(\App\Models\En\Category::class, 'category_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(\App\Models\En\Comment::class, 'post_id', 'id');
    }
}
