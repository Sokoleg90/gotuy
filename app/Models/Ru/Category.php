<?php

namespace App\Models\Ru;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ru_categories';
    protected $guarded = false;

    public function posts(){
        return $this->hasMany(\App\Models\Ru\Post::class, 'category_id', 'id');
    }
}
