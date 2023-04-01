<?php

namespace App\Models\En;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'en_categories';
    protected $guarded = false;

    public function posts(){
        return $this->hasMany(\App\Models\En\Post::class, 'category_id', 'id');
    }
}
