@extends('Admin.layout')

@section('css')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">
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
                            <a data-toggle="modal" data-target=".modal-create"
                               class="btn btn-primary">Agregar
                                autor</a>
                        </div>

                    </div>
                    <div class="card-body spur-card-body-chart">
                        <table class="table table-hover table-in-card" id="list-all-authors">
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
                    <div class="modal-title spur-card-title"> Crear Autor</div>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                </div>
                <div class="card-body ">
                    <form id="formCreateAutor">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="nameAutor" id="nameAutor"
                                       placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="lastnameAutor" id="lastnameAutor"
                                       placeholder="Apellidos">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="emailAutor" id="emailAutor"
                                       placeholder="ejemplo@correo.com">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="cityAutor" id="cityAutor"
                                       placeholder="Ciudad">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="programAutor" id="programAutor"
                                       placeholder="Program">
                            </div>
                            <div class="form-group col-md-6">
                                <select class="custom-select" name="semesterAutor" id="semesterAutor">
                                    <option value="">Seleccione...</option>
                                    <option value="Semestre 1">Semestre 1</option>
                                    <option value="Semestre 2">Semestre 2</option>
                                    <option value="Semestre 3">Semestre 3</option>
                                    <option value="Semestre 4">Semestre 4</option>
                                    <option value="Semestre 5">Semestre 5</option>
                                    <option value="Semestre 6">Semestre 6</option>
                                    <option value="Semestre 7">Semestre 7</option>
                                    <option value="Semestre 8">Semestre 8</option>
                                    <option value="Semestre 9">Semestre 9</option>
                                    <option value="Semestre 10">Semestre 10</option>
                                </select>
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
                    <div class="modal-title spur-card-title"> Actualizar Autor</div>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                </div>
                <div class="card-body ">
                    <form id="formUpdateAutor">
                        <div class="form-row">
                            <div>
                                <input type="text" class="d-none" id="uAutorId">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="uNameAutor"
                                       placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="uLastnameAutor"
                                       placeholder="Apellidos">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="uEmailAutor"
                                       placeholder="ejemplo@correo.com">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="uCityAutor"
                                       placeholder="Ciudad">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="uProgramAutor"
                                       placeholder="Program">
                            </div>
                            <div class="form-group col-md-6">
                                <select class="custom-select" id="uSemesterAutor">
                                    <option value="">Seleccione...</option>
                                    <option value="1">Semestre 1</option>
                                    <option value="2">Semestre 2</option>
                                    <option value="3">Semestre 3</option>
                                    <option value="4">Semestre 4</option>
                                    <option value="5">Semestre 5</option>
                                    <option value="6">Semestre 6</option>
                                    <option value="7">Semestre 7</option>
                                    <option value="8">Semestre 8</option>
                                    <option value="9">Semestre 9</option>
                                    <option value="10">Semestre 10</option>
                                </select>
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
    <script src="{{asset('js/admin/autor.js')}}"></script>
@endsection
