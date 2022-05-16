@extends('Admin.layout')

@section('title', 'Crear autor')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card spur-card">
                    <div class="card-header">
                        <div class="spur-card-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <div class="spur-card-title"> Crear Autor </div>
                    </div>
                    <div class="card-body ">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="Apellidos">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="inputCity" placeholder="ejemplo@correo.com">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="inputCity" placeholder="Ciudad">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
