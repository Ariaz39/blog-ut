@extends('Admin.layout')

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
                            <div class="stats-number">114</div>
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
                            <div class="stats-number">4</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="stats stats-danger">
                    <h3 class="stats-title"> Recientes </h3>
                    <div class="stats-content">
                        <div class="stats-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="stats-data">
                            <div class="stats-number">5</div>
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

                    </div>
                    <div class="card-body spur-card-body-chart">
                        <table class="table table-hover table-in-card">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
