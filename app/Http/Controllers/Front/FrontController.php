<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Autor;
use App\Models\Blog;
use App\Models\Category;

class FrontController extends Controller
{
    public function index()
    {
        return view('Front.index');
    }

    public function listAllBlogs()
    {
        return Blog::where('state', 1)
            ->orderBy('category_id', 'desc')
            ->get()
            ->toArray();
    }

    public function listLastBlogs()
    {
        return Blog::where('state', 1)
            ->orderBy('blog_id', 'desc')
            ->limit(3)
            ->get()
            ->toArray();
    }

    public function listLastCategories()
    {
        return Category::where('state', 1)
            ->orderBy('category_id', 'desc')
            ->limit(5)
            ->get()
            ->toArray();
    }

    public function listLastAutors()
    {
        return Autor::where('state', 1)
            ->orderBy('autor_id', 'desc')
            ->limit(5)
            ->get()
            ->toArray();
    }
}
