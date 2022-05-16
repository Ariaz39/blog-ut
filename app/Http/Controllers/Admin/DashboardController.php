<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Autor;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['count_blogs'] = Blog::where('state', 1)->count();
        $data['count_autors'] = Autor::where('state', 1)->count();
        $data['count_categories'] = Category::where('state', 1)->count();
        $data['blogs'] = Blog::where('state', 1)->get()->toArray();
//        return view('Admin.dashboard', compact('data','blogs','autors','categories'));
        return response($data, 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
