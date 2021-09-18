<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Video extends Model
{
    use HasFactory;

    public function comments(){
        return $this->morphMany(Comment::class,'commentable'); //đa hình
    }
}
