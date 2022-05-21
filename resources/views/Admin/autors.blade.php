@extends('Admin.layout')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">
@endsection

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
                            <a href="{{route('create-autor')}}" class="btn btn-primary">Agregar autor</a>
                        </div>

                    </div>
                    <div class="card-body spur-card-body-chart">
                        <table class="table table-hover table-in-card" id="list-all">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Email</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Semestre</th>
                                <th scope="col">Programa</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>

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
    <script src="{{asset('js/admin/autor.js')}}"></script>
    <script src="{{asset('js/datatable.js')}}"></script>
@endsection
