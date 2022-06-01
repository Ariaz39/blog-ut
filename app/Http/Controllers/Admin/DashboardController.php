<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\UseCases\Contracts\Admin\GetDataDashboardInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $getDataDashboard;

    public function __construct(GetDataDashboardInterface $getDataDashboard)
    {
        $this->getDataDashboard = $getDataDashboard;
    }

    public function index()
    {
        $data = $this->getDataDashboard->handle();

        return view('Admin.dashboard', compact('data'));
        // return response($this->getDataDashboard->handle(), 200);
    }

    public function listAllBlogs()
    {
        $data = Blog::where('blg-blogs.state', 1)
            ->join('blg-autors as a', 'blg-blogs.autor_id', 'a.autor_id')
            ->join('blg-categories as c', 'blg-blogs.category_id', 'c.category_id')
            ->select(
                'blg-blogs.*',
                'a.name as autor_name',
                'a.lastname as autor_lastname',
                'a.email as autor_email',
                'c.name as category_name'
            )
            ->orderBy('category_id', 'desc')
            ->get()->toArray();

        return response()->json([
            'data' => $data,
            'message' => 'Blogs listados exitosamente.'
        ]);
    }
}
