<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('Admin.blogs');
    }

    public function ListAll()
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
            ->get()->toArray();

        return response()->json([
            'data' => $data,
            'message' => 'Blogs listados exitosamente.'
        ]);
    }

    public function storeBlog(Request $request)
    {
        $blog = new Blog();
        dd($request->hasFile('imageBlog'));
        $blog['category_id'] = $request['category_id'];
        $blog['autor_id'] = $request['autor_id'];
        $blog['image'] = $request['image'];
        $blog['title'] = $request['title'];
        $blog['content'] = $request['content'];
        $blog['created_at'] = now();
        $blog->save();

        return response()->json([
            'data' => [],
            'message' => 'Blog creado exitosamente.'
        ]);
    }

    public function showBlog($id)
    {
        $data = Blog::where('state', 1)
            ->find($id);

        return response()->json([
            'data' => $data,
            'message' => 'Blog detallado exitosamente.'
        ]);
    }

    public function updateBlog(Request $request, $id)
    {
        $blog_update = Blog::find($id);
        $blog_update['category_id'] = $request['category_id'];
        $blog_update['autor_id'] = $request['autor_id'];
        $blog_update['image'] = $request['image'];
        $blog_update['title'] = $request['title'];
        $blog_update['content'] = $request['content'];
        $blog_update->update();

        return response()->json([
            'data' => [],
            'message' => 'Blog actualizado exitosamente.'
        ]);
    }

    public function deleteBlog($id)
    {
        $delete_blog = Blog::find($id);

        $delete_blog['state'] = 2;
        $delete_blog->update();

        return response()->json([
            'data' => [],
            'message' => 'Blog bloqueado exitosamente.'
        ]);
    }
}
