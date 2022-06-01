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
        return response()->json([
            'data' => $data,
            'message' => 'Categorias listadas corretamente.'
        ]);
    }

    public function storeCategory(Request $request)
    {
        $category = new Category();
        $category['name'] = $request['name'];
        $category['created_at'] = now();
        $category->save();

        return response()->json([
            'data' => [],
            'message' => 'Proceso realizado exitosamente.'
        ]);
    }

    public function showCategory($id)
    {
        $data = Category::where('state', 1)
        ->find($id);

        return response()->json([
            'data' => $data,
            'message' => 'Categoria detallada exitosamente.'
        ]);
    }

    public function updateCategory(Request $request, $id)
    {
        $update_category = Category::find($id);

        $update_category['name'] = $request['name'];
        $update_category->update();

        return response()->json([
            'data' => [],
            'message' => 'Proceso realizado exitosamente.'
        ]);
    }

    public function deleteCategory($id)
    {
        $delete_category = Category::find($id);

        $delete_category['state'] = 2;
        $delete_category->update();

        return response()->json([
            'data' => [],
            'message' => 'Categoría bloqueada exitosamente.'
        ]);
    }
}
