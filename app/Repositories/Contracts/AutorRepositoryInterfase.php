<?php

namespace App\Repositories\Contracts;

use App\Models\Autor;
use Illuminate\Http\Request;

interface AutorRepositoryInterfase {
    
    public function create(Request $request): bool;

    public function show(int $id): Autor;

    public function update(Request $request, int $id): bool;

    public function delete(int $id): bool;
}