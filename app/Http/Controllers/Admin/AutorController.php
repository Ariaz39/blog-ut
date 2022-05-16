<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index()
    {
        $data = Autor::where('state', 1)->get()->toArray();
        return view('Admin.autors', compact('data'));
    }

    public function create()
    {
        return view('Admin.create_autor');
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
