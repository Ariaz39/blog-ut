@extends('Admin.layout')

@section('script-head')
    <!-- TinyMCE -->
    <script
        src="https://cdn.tiny.cloud/1/l7yu4rb40s4hp816fx4stqohhp6fxpn2x64s83wjsjo3t668/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#blog_content',
            plugins: [
                'advlist', 'advcode', 'advtable', 'autolink', 'checklist',
                'lists', 'link', 'image', 'charmap', 'anchor', 'searchreplace',
                'powerpaste', 'formatpainter', 'media', 'table', 'code', 'quickbars', 'wordcount'
            ],
            toolbar: 'undo redo | code table image | a11ycheck casechange blocks bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify |' +
                'bullist numlist checklist outdent indent'
        })
    </script>
@endsection

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
                        <div class="spur-card-title"> Crear Blog</div>
                    </div>
                    <div class="card-body ">
                        <form action="">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select class="custom-select" name="category_id"
                                            id="category_id">
                                        <option value="">Categoria</option>
                                        <option value="">cat1</option>
                                        <option value="">cat2</option>
                                        <option value="">cat3</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="custom-select" name="category_id"
                                            id="category_id">
                                        <option value="">Autor</option>
                                        <option value="">aut1</option>
                                        <option value="">aut2</option>
                                        <option value="">aut3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="inputTitle"
                                           placeholder="Titulo">
                                </div>
                                <div class="custom-file col-md-6">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Seleccionar imagen</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <textarea name="blog_content" id="blog_content" cols="110"
                                              rows="10"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>.custom-file-label::after {content: "Buscar"!important;}</style>

@endsection

