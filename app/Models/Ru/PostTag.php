<?php

namespace App\Models\Ru;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;
    protected $table = 'ru_post_tags';
    protected $guarded = false;
}
