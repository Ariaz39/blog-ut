<?php

namespace App\Modules\Blog\Services;

use App\Libs\ServiceResponse\ServiceResponse;
use App\Modules\Blog\Repositories\BlogRepository;

class BlogService extends ServiceResponse
{
    public $repositoryBlog;

    public function __construct()
    {
        $this->repositoryBlog = new BlogRepository();
    }

    public function index()
    {
        $data = $this->repositoryBlog->index();
        $this->responseSuccess($data, 'Mensaje de respuesta');
    }

    public function listAll()
    {
        $data = $this->repositoryBlog->listAll();
        // TODO: Llega la info pero no la retorna en la api, manda vacio.
        dd($data);
        $this->responseSuccess($data);
    }
}
