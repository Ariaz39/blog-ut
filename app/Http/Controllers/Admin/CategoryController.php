<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('Admin.categories');
    }

    public function listAll()
    {
        $data = Category::where('state', 1)->get();
        return response($data, 200);
    }

    public function createCategory()
    {
        return view('Admin.create_category');
    }

    public function storeCategory(Request $request)
    {
        $category = new Category();
        $category['name'] = $request['name'];
        $category['s'] = $request['name'];
    }

    public function showCategory($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function updateCategory(Request $request, $id)
    {
        //
    }

    public function deleteCategory($id)
    {
        //
    }
}
