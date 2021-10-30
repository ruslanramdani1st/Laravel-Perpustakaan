<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Memberikan perintah model ini akan di gunakan oleh table tersebut
    protected $table = 'posts';
}
