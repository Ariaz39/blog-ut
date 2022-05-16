@extends('Admin.layout')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">
@endsection

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row dash-row">
            <div class="col-xl-4">
                <div class="stats stats-primary">
                    <h3 class="stats-title"> Blogs </h3>
                    <div class="stats-content">
                        <div class="stats-icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <div class="stats-data">
                            <div class="stats-number">{{$blogs}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="stats stats-success ">
                    <h3 class="stats-title"> Autores </h3>
                    <div class="stats-content">
                        <div class="stats-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stats-data">
                            <div class="stats-number">{{$autors}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="stats stats-danger">
                    <h3 class="stats-title"> Categorias </h3>
                    <div class="stats-content">
                        <div class="stats-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="stats-data">
                            <div class="stats-number">{{$categories}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card spur-card">
                    <div class="card-header">
                        <div class="spur-card-icon">
                            <i class="fas fa-list"></i>
                        </div>
                        <div class="spur-card-title"> Listado de blogs</div>
                        <div class="spur-card-menu">
                            <div class="dropdown show">
                                <a class="btn btn-primary btn-sm mb-1" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <i class="fas fa-plus"></i></a>
                                <div class="dropdown-menu dropdown-menu-right"
                                     aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{route('create-blog')}}">Agregar
                                        Blog</a>
                                    <a class="dropdown-item" href="{{route('create-autor')}}">Agregar
                                        Autor</a>
                                    <a class="dropdown-item" href="{{route('create-category')}}">Agregar
                                        Categoria</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body spur-card-body-chart">
                        <table class="table table-hover table-in-card" class="table table-striped" id="list-all">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Contenido</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key)
                                <tr>
                                    <th scope="row">{{$key['blog_id']}}</th>
                                    <td>{{$key['image']}}</td>
                                    <td>{{$key['title']}}</td>
                                    <td>{{substr($key['content'], 0, 20)}}</td>
                                    <td>{{$key['autor_id']}}</td>
                                    <td>{{$key['category_id']}}</td>
                                    <td>
                                        <a href="#" type="submit" class="btn btn-info btn-sm"><i
                                                class="fa fa-edit"></i></a>
                                        <form class="d-inline" action="">
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script-footer')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{asset('js/datatable.js')}}"></script>
@endsection
