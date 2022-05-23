<?php

namespace App\Modules\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blg-blogs';
    protected $primaryKey = 'blog_id';

    protected $fillable = [
        'category_id',
        'autor_id',
        'image',
        'title',
        'content',
        'state',
        'created_at'
    ];
}
