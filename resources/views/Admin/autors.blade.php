@extends('Admin.layout')

@section('title', 'Autores')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card spur-card">
                    <div class="card-header">
                        <div class="spur-card-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="spur-card-title"> Listado de autores</div>
                        <div class="spur-card-menu">
                            <a href="" class="btn btn-primary">Agregar autor</a>
                        </div>

                    </div>
                    <div class="card-body spur-card-body-chart">
                        <table class="table table-hover table-in-card">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Email</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key)
                                <tr>
                                    <th scope="row">{{$key['autor_id']}}</th>
                                    <td>{{$key['name']}}</td>
                                    <td>{{$key['lastname']}}</td>
                                    <td>{{$key['email']}}</td>
                                    <td>{{$key['city']}}</td>
                                    <td>
                                        <a href="#" type="submit" class="btn btn-info btn-sm"><i class="fa fa-user-edit"></i></a>
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
