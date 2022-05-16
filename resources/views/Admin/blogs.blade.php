@extends('Admin.layout')

@section('title', 'Blogs')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card spur-card">
                    <div class="card-header">
                        <div class="spur-card-icon">
                            <i class="fas fa-list"></i>
                        </div>
                        <div class="spur-card-title"> Listado de blogs</div>
                        <div class="spur-card-menu">
                            <a href="{{route('create-blog')}}" class="btn btn-primary">Agregar blog</a>
                        </div>

                    </div>
                    <div class="card-body spur-card-body-chart">
                        <table class="table table-hover table-in-card">
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
                                        <a href="#" type="submit" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <form class="d-inline" action="">
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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
