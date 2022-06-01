<?php

namespace App\Models;

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blg-blogs';
    protected $primaryKey = 'blog_id';
    public $timestamps = false;

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
