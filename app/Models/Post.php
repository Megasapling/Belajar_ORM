<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Mengizinkan kolom ini diisi oleh Seeder
    protected $fillable = ['title', 'content'];
}