<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    public $timestamps = true;

    protected $fillable = [
        'title', 'post_content', 'tags', 'user_id', 'created_at'
    ];
}
