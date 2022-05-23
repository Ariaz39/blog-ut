<?php

namespace App\Repositories\Modulos;

use App\Models\Autor;
use Illuminate\Http\Request;
use App\Repositories\Contracts\AutorRepositoryInterfase;

class AutorRepository implements AutorRepositoryInterfase{
    
    protected $autor;

    public function __construct(Autor $autor)
    {
        $this->autor = $autor;
    }

    public function create(Request $request): bool {
        $autor = new $this->autor;    
        $autor->name = $request->name;
        $autor->lastname = $request->lastname;
        $autor->email = $request->email;
        $autor->city = $request->city;
        $autor->semester = $request->semester;
        $autor->program = $request->program;
        $autor->created_at = now();

        return $autor->save();
    }

    public function show(int $id): Autor {
        
        return $this->autor->find($id);
    }

    public function update(Request $request, int $id): bool {
        $autor = $this->show($id);
        $autor->name = $request->name;
        $autor->lastname = $request->lastname;
        $autor->email = $request->email;
        $autor->city = $request->city;
        $autor->semester = $request->semester;
        $autor->program = $request->program;

        return $autor->update();
    }

    public function delete(int $id): bool {
        $autor = $this->show($id);
        $autor->state = 2;

        return $autor->update();
    }
}