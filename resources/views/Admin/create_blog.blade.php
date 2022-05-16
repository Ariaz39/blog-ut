@extends('Admin.layout')

@section('title', 'Crear blog')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card spur-card">
                    <div class="card-header">
                        <div class="spur-card-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <div class="spur-card-title"> Crear Blog </div>
                    </div>
                    <div class="card-body ">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select class="form-control" name="category_id" id="category_id">
                                        <option value="">Categoria</option>
                                        <option value="">cat1</option>
                                        <option value="">cat2</option>
                                        <option value="">cat3</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" name="category_id" id="category_id">
                                        <option value="">Autor</option>
                                        <option value="">aut1</option>
                                        <option value="">aut2</option>
                                        <option value="">aut3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="inputTitle" placeholder="Titulo">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="file" class="form-control" id="inputImage">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <textarea name="blog_content" id="blog_content" cols="110" rows="10"></textarea>
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
