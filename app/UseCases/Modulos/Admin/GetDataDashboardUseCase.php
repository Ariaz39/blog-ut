<?php

namespace App\UseCases\Modulos\Admin;

use App\Models\Autor;
use App\Models\Blog;
use App\Models\Category;
use App\UseCases\Contracts\Admin\GetDataDashboardInterface;

class GetDataDashboardUseCase implements GetDataDashboardInterface {

    public function handle(): array
    {
        $data['count_blogs'] = Blog::where('state', 1)->count();
        $data['count_autors'] = Autor::where('state', 1)->count();
        $data['count_categories'] = Category::where('state', 1)->count();
        $data['blogs'] = Blog::where('state', 1)->get()->toArray();

        return $data;
    }
}