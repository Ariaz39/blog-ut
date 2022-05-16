<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/spur.css')}}">
    @yield('css')
    @yield('script-head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="{{asset('js/chart-js-config.js')}}"></script>
    <title>Spur - @yield('title')</title>
</head>

<body>
<div class="dash">
    <div class="dash-nav dash-nav-dark">
        <header>
            <a href="#!" class="menu-toggle">
                <i class="fas fa-bars"></i>
            </a>
            <a href="{{route('dashboard')}}" class="spur-logo"><i class="fas fa-bolt"></i> <span>Blog UT</span></a>
        </header>
        <nav class="dash-nav-list">
            <a href="{{route('dashboard')}}" class="dash-nav-item">
                <i class="fas fa-home"></i> Dashboard</a>
            <div class="dash-nav-dropdown">
                <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                    <i class="fas fa-chart-bar"></i> Autor </a>
                <div class="dash-nav-dropdown-menu">
                    <a href="{{route('autors')}}" class="dash-nav-dropdown-item">Listar</a>
                    <a href="{{route('create-autor')}}" class="dash-nav-dropdown-item">Crear</a>
                </div>
            </div>
            <div class="dash-nav-dropdown">
                <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                    <i class="fas fa-chart-bar"></i> Categorias </a>
                <div class="dash-nav-dropdown-menu">
                    <a href="{{route('categories')}}" class="dash-nav-dropdown-item">Listar</a>
                    <a href="{{route('create-category')}}" class="dash-nav-dropdown-item">Crear</a>
                </div>
            </div>
            <div class="dash-nav-dropdown">
                <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                    <i class="fas fa-chart-bar"></i> Blogs </a>
                <div class="dash-nav-dropdown-menu">
                    <a href="{{route('blogs')}}" class="dash-nav-dropdown-item">Listar</a>
                    <a href="{{route('create-blog')}}" class="dash-nav-dropdown-item">Crear</a>
                </div>
            </div>
{{--            <div class="dash-nav-dropdown ">--}}
{{--                <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">--}}
{{--                    <i class="fas fa-cube"></i> Components </a>--}}
{{--                <div class="dash-nav-dropdown-menu">--}}
{{--                    <div class="dash-nav-dropdown ">--}}
{{--                        <a href="#" class="dash-nav-dropdown-item dash-nav-dropdown-toggle">Icons</a>--}}
{{--                        <div class="dash-nav-dropdown-menu">--}}
{{--                            <a href="icons.html" class="dash-nav-dropdown-item">Solid Icons</a>--}}
{{--                            <a href="icons.html#regular-icons" class="dash-nav-dropdown-item">Regular Icons</a>--}}
{{--                            <a href="icons.html#brand-icons" class="dash-nav-dropdown-item">Brand Icons</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


        </nav>
    </div>
    <div class="dash-app">
        <header class="dash-toolbar">
            <a href="#!" class="menu-toggle">
                <i class="fas fa-bars"></i>
            </a>
{{--            <a href="#!" class="searchbox-toggle">--}}
{{--                <i class="fas fa-search"></i>--}}
{{--            </a>--}}
{{--            <form class="searchbox" action="#!">--}}
{{--                <a href="#!" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>--}}
{{--                <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>--}}
{{--                <input type="text" class="searchbox-input" placeholder="type to search">--}}
{{--            </form>--}}
            <div class="tools">
                <a href="https://github.com/Ariaz39/blog-ut" target="_blank" class="tools-item">
                    <i class="fab fa-github"></i>
                </a>
{{--                <a href="#!" class="tools-item">--}}
{{--                    <i class="fas fa-bell"></i>--}}
{{--                    <i class="tools-item-count">4</i>--}}
{{--                </a>--}}
                <div class="dropdown tools-item">
                    <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item" href="#!">Mi Perfil</a>
                        <a class="dropdown-item" href="login.html">Cerrar sesion</a>
                    </div>
                </div>
            </div>
        </header>
        <main class="dash-content">
            @yield('content')
        </main>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{asset('js/spur.js')}}"></script>
@yield('script-footer')
</body>

</html>
