@extends('Front.layout')

@section('title', 'Blog')

@section('content')
    <!-- start page-title-s2 -->
    <section class="page-title-s2">
        <div class="container-1310">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="inner">
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
        </div> <!-- end container-1310 -->
    </section>
    <!-- end page-title-s2 -->


    <!-- start blog-pg-section -->
    <section class="blog-pg-section section-padding thaia-stk-sidebar">
        <div class="container-1310">
            <div class="row">
                <div class="col col-lg-8 content">
                    <div class="blog-content">
                        <div class="post format-standard-image" id="blog_content">
                            {{--Aca se ingresa la data de los blogs--}}
                        </div>
                        <div class="pagination-wrapper pagination-wrapper-left">
                            <ul class="pg-pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <i class="fi ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <i class="fi ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="blog-sidebar-s2">
                        <div class="widget recent-post-widget">
                            <h3>BLOGS RECIENTES</h3>
                            <div class="posts" id="list_blog_recents">
                                {{--Aca se ingresa la data de los blogs recientes--}}
                            </div>
                        </div>
                        <div class="widget add-widget">
                            <h3>Advertise</h3>
                            <div>
                                <div class="img-holder">
                                    <img src="{{asset('assets/images/blog/sidebar-add-bg.jpg')}}" alt>
                                </div>
                                <div class="details">
                                    <h4>Slightly domed and divided by arches into stiff sections</h4>
                                    <a href="" class="theme-btn-s3">See more</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget tag-widget">
                            <h3>CATEGORIAS</h3>
                            <ul id="list_categories_int"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end blog-pg-section -->
@endsection

@section('scripts-footer')

@endsection
