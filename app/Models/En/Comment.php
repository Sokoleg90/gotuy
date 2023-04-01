<?php

namespace App\Models\En;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'en_comments';
    protected $guarded = false;

    public function getDateAsCarbonAttribute(){
        return Carbon::parse($this->created_at);
    }
}
