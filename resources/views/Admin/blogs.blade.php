@extends('Admin.layout')

@section('script-head')
    <!-- TinyMCE -->
    <script
        src="https://cdn.tiny.cloud/1/l7yu4rb40s4hp816fx4stqohhp6fxpn2x64s83wjsjo3t668/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <!--<script>
        tinymce.init({
            selector: 'textarea.blog_content',
            plugins: [
                'advlist', 'advcode', 'advtable', 'autolink', 'checklist',
                'lists', 'link', 'image', 'charmap', 'anchor', 'searchreplace',
                'powerpaste', 'formatpainter', 'media', 'table', 'code', 'quickbars', 'wordcount'
            ],
            language: 'es',
            entity_encoding: 'raw',
            toolbar: 'undo redo | code table image | a11ycheck casechange blocks bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify |' +
                'bullist numlist checklist outdent indent'
        })
    </script>--!>
@endsection

@section('css')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">
@endsection

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
                            <btn data-toggle="modal" data-target=".modal-create"
                               class="btn btn-primary">Agregar blog</btn>
                        </div>

                    </div>
                    <div class="card-body spur-card-body-chart">
                        <table class="table table-hover table-in-card" class="table table-striped"
                               id="list-all">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Contenido</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Fecha de creacion</th>
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
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content card spur-card">
                <div class="modal-header card-header">
                    <div class="spur-card-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="modal-title spur-card-title"> Crear Blog</div>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                </div>
                <div class="card-body ">
                    <form id="formCreateBlog" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="categoryBlog"
                                       id="categoryBlog"
                                       placeholder="Categoria">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="titleBlog"
                                       id="titleBlog"
                                       placeholder="Titulo">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="custom-file col-md-6">
                                <input type="file" class="custom-file-input" id="imageBlog" name="imageBlog">
                                <label class="custom-file-label" for="imageBlog">Seleccionar
                                    imagen</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select class="custom-select" name="semesterBlog" id="autorBlog">
                                    <option value="">Seleccione autor...</option>
                                    <option value="Semestre 1">Semestre 1</option>
                                    <option value="Semestre 2">Semestre 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <textarea class="blog_content" id="contentBlog"></textarea>
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
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content card spur-card">
                <div class="modal-header card-header">
                    <div class="spur-card-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="modal-title spur-card-title"> Actualizar Blog</div>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                </div>
                <div class="card-body">
                    <form id="formUpdateBlog" enctype="multipart/form-data">
                        <div class="form-row">
                            <div>
                                <input type="text" class="d-none" id="uBlogId">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="uCategoryBlog"
                                       id="uCategoryBlog"
                                       placeholder="Categoria">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="uTitleBlog"
                                       id="uTitleBlog"
                                       placeholder="Titulo">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="custom-file col-md-6">
                                <input type="file" class="custom-file-input" id="uImageBlog">
                                <label class="custom-file-label" for="imageBlog">Seleccionar
                                    imagen</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select class="custom-select" name="uAutorBlog" id="uAutorBlog">
                                    <option value="">Seleccione autor...</option>
                                    <option value="1">Semestre 1</option>
                                    <option value="2">Semestre 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <textarea class="blog_content" id="uContentBlog"></textarea>
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
    <script src="{{asset('js/admin/blog.js')}}"></script>
@endsection

