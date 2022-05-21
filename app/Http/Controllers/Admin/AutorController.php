<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index()
    {
        return view('Admin.autors');
    }

    public function listAll()
    {
        $data = Autor::where('state', 1)->get();
        return response($data, 200);
    }

    public function createAutor()
    {
        return view('Admin.create_autor');
    }

    public function storeAutor(Request $request)
    {
        //
    }

    public function showAutor($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function updateAutor(Request $request, $id)
    {
        //
    }

    public function deleteAutor($id)
    {
        //
    }
}
