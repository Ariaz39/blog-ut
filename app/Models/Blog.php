<?php

namespace App\Models;

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

    // TODO: revisar la relacion
//    protected $with = ['category','autor'];

    protected function category()
    {
        return $this->hasOne(Category::class, 'category_id', 'category_id');
    }

    protected function autor()
    {
        return $this->hasOne(Autor::class, 'autor_id', 'autor_id');
    }
}
