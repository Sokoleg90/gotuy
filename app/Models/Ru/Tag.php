<?php

namespace App\Models\Ru;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'tags';
    protected $guarded = false;

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'ru_post_tags', 'tag_id', 'post_id');
    }
}
