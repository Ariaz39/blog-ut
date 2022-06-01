@extends('Admin.layout')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">

@endsection

@section('title', 'Categorias')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card spur-card">
                    <div class="card-header">
                        <div class="spur-card-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="spur-card-title"> Listado de cateogorias</div>
                        <div class="spur-card-menu">
                            <btn data-toggle="modal" data-target=".modal-create"
                               class="btn btn-primary">Agregar
                                categoria</btn>
                        </div>

                    </div>
                    <div class="card-body spur-card-body-chart">
                        <table class="table table-hover table-in-card" id="list-all-authors">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Crear -->
    <div id="approveDialog" class="modal fade modal-create" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content card spur-card">
                <div class="modal-header card-header">
                    <div class="spur-card-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="modal-title spur-card-title"> Crear Categoria</div>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                </div>
                <div class="card-body ">
                    <form id="formCreateCategory">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="nameCategory"
                                       placeholder="Nombre">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-block btn-primary">Crear</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- fin crear -->

    <!-- actualizar -->
    <div id="approveDialog" class="modal fade modal-update" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content card spur-card">
                <div class="modal-header card-header">
                    <div class="spur-card-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="modal-title spur-card-title"> Actualizar Categoria</div>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                </div>
                <div class="card-body ">
                    <form id="formUpdateCategory">
                        <div class="form-row">
                            <div>
                                <input type="text" class="d-none" name="uCategoryId">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="uNameCategory"
                                       placeholder="Nombre">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- fin actualizar -->
@endsection

@section('script-footer')
    <script src="{{asset('js/admin/category.js')}}"></script>
@endsection
