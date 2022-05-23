<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Autor;
use App\Repositories\Contracts\AutorRepositoryInterfase;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    protected $autorRepository;

    public function __construct(AutorRepositoryInterfase $autorRepository)
    {
       $this->autorRepository = $autorRepository; 
    }
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
        $this->autorRepository->create($request);
        
        return response([
            'success' => true,
            'data' => [],
            'code' => 200,
            'msg' => 'Autor creado exitosamente'
        ]);
    }

    public function showAutor(int $id)
    {
        return response($this->autorRepository->show($id));
    }

    public function updateAutor(Request $request, int $id)
    {   
        $this->autorRepository->update($request, $id);

        return response([
            'success' => true,
            'data' => [],
            'code' => 200,
            'msg' => 'Autor actualizado exitosamente'
        ]);
    }

    public function deleteAutor(int $id)
    {
        $this->autorRepository->delete($id);
        
        return response([
            'success' => true,
            'data' => [],
            'code' => 200,
            'msg' => 'Autor bloqueado exitosamente'
        ]);
    }
}
