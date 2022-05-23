<?php

namespace App\Modules\Blog\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Blog\Services\BlogService;
use Illuminate\Http\Request;

class Blog extends Controller
{
    protected $serviceBlog;

    public function __construct()
    {
        $this->serviceBlog = new BlogService();
    }

    public function index()
    {
        $this->serviceBlog->index();
    }

    public function listAll()
    {
        $this->serviceBlog->listAll();
    }
}
