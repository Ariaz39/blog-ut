<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Blog::where('state', 1)->get()->toArray();
        return view('Admin.dashboard', compact('data'));
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
