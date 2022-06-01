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

    public function login()
    {
        return view('Front.login');
    }

    public function listAllBlogs()
    {
        $data = Blog::where('blg-blogs.state', 1)
                ->join('blg-autors as a', 'blg-blogs.autor_id', 'a.autor_id')
                ->join('blg-categories as c', 'blg-blogs.category_id', 'c.category_id')
                ->select(
                    'blg-blogs.*',
                    'a.name as autor_name',
                    'a.lastname as autor_lastname',
                    'a.email as autor_email',
                    'c.name as category_name'
                )
                ->orderBy('category_id', 'desc')
                ->get()->toArray();

        return response()->json([
            'data' => $data,
            'message' => 'Blogs listados exitosamente.'
        ]);
    }

    public function listLastBlogs()
    {
        $data = Blog::where('state', 1)
            ->orderBy('blog_id', 'desc')
            ->limit(3)
            ->get()
            ->toArray();

        return response()->json([
            'data' => $data,
            'message' => 'Blogs listados exitosamente.'
        ]);
    }

    public function listLastCategories()
    {
        $data = Category::where('state', 1)
            ->orderBy('category_id', 'desc')
            ->limit(5)
            ->get()
            ->toArray();

        return response()->json([
            'data' => $data,
            'message' => 'Blogs listados exitosamente.'
        ]);
    }

    public function listLastAutors()
    {
        $data = Autor::where('state', 1)
            ->orderBy('autor_id', 'desc')
            ->limit(5)
            ->get()
            ->toArray();

        return response()->json([
            'data' => $data,
            'message' => 'Blogs listados exitosamente.'
        ]);
    }
}
