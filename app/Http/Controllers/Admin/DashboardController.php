<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

    public function create()
    {
        //
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
