<?php

namespace App\Modules\Blog\Repositories;

use App\Modules\Blog\Models\Blog;

class BlogRepository
{
    public function index()
    {
        return Blog::get();
    }

    public function listAll()
    {
        return Blog::all()->toArray();
    }
}
