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

        return response([
            'success' => 'true',
            'data' => $data,
            'code' => 200,
            'msg' => 'Proceso realizado exitosamente.'
        ]);
    }

    public function storeCategory(Request $request)
    {
        $category = new Category();
        $category['name'] = $request['name'];
        $category['created_at'] = now();
        $category->save();

        return response([
            'success' => 'true',
            'data' => [],
            'code' => 200,
            'msg' => 'Proceso realizado exitosamente.'
        ]);
    }

    public function showCategory($id)
    {
        $category = Category::where('state', 1)
        ->find($id);

        return response([
            'success' => 'true',
            'data' => $category,
            'code' => 200,
            'msg' => 'Categoría detallada exitosamente.'
        ]);
    }

    public function updateCategory(Request $request, $id)
    {
        $update_category = Category::find($id);
        $update_category['name'] = $request['name'];
        $update_category->update();

        return response([
            'success' => 'true',
            'data' => [],
            'code' => 200,
            'msg' => 'Proceso realizado exitosamente.'
        ]);
    }

    public function deleteCategory($id)
    {
        $delete_category = Category::find($id);
        $delete_category['state'] = 2;
        $delete_category->update();

        return response([
            'success' => 'true',
            'data' => [],
            'code' => 200,
            'msg' => 'Categoría bloqueada exitosamente.'
        ]);
    }
}
