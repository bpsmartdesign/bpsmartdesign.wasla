{{-- Extends layout --}}
@extends('layout.website_default')

{{-- Content --}}
@section('content')

    <div role="main" class="main">
        <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(/website/media/img/blog.jpg);">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-9 font-weight-bold">Events</h1>
                        <span class="sub-title">Some awesome events and more ...</span>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb breadcrumb-light d-block text-center">
                            <li><a href="#">Home</a></li>
                            <li class="active">Pages</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-4">

            <div class="row">
                <div class="col-lg-3">
                    <aside class="sidebar">
                        <form action="" method="">
                            <div class="input-group mb-3 pb-1">
                                <input class="form-control text-1" placeholder="Search..." name="s" id="s" type="text">
                                <span class="input-group-append">
                                    <button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
                                </span>
                            </div>
                        </form>
                        <h5 class="font-weight-bold pt-4">Categories</h5>
                        <ul class="nav nav-list flex-column mb-5">
                            <li class="nav-item"><a class="nav-link" href="#">Concerts (7)</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Diners (3)</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Repetitions (4)</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Others (11)</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-9">
                    <div class="blog-posts">
                        <article class="post post-medium">
                            <div class="row mb-3">
                                <div class="col-lg-5">
                                    <div class="post-image">
                                        <a href="#">
                                            <img src="{{ asset('website/media/img/blog/medium/blog-13.jpg') }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="post-content">
                                        <h2 class="font-weight-semibold text-5 line-height-4 mb-2"><a href="#">Lorem ipsum dolor sit amet or not?</a></h2>
                                        <p class="mb-0">Toffee chocolate cake macaroon lemon drops sugar plum gummies dessert bear claw. Pastry donut chupa chups. Icing jelly beans tootsie roll cheesecake pudding tiramisu. Lollipop cotton candy donut sweet jelly wafer sweet. [...]</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="post-meta">
                                        <span><i class="far fa-calendar-alt"></i> March 17, 2021 </span>
                                        <span><i class="far fa-user"></i> Concert in congo </span>
                                        <span><i class="far fa-folder"></i> <a href="#">Concert</a>, <a href="#">Song</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">4 Comment(s)</a></span>
                                        <span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="#" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post post-medium">
                            <div class="row mb-3">
                                <div class="col-lg-5">
                                    <div class="post-image">
                                        <a href="#">
                                            <img src="{{ asset('website/media/img/blog/medium/blog-13.jpg') }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="post-content">
                                        <h2 class="font-weight-semibold text-5 line-height-4 mb-2"><a href="#">Lorem ipsum dolor sit amet or not?</a></h2>
                                        <p class="mb-0">Toffee chocolate cake macaroon lemon drops sugar plum gummies dessert bear claw. Pastry donut chupa chups. Icing jelly beans tootsie roll cheesecake pudding tiramisu. Lollipop cotton candy donut sweet jelly wafer sweet. [...]</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="post-meta">
                                        <span><i class="far fa-calendar-alt"></i> March 17, 2021 </span>
                                        <span><i class="far fa-user"></i> Concert in congo </span>
                                        <span><i class="far fa-folder"></i> <a href="#">Concert</a>, <a href="#">Song</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">4 Comment(s)</a></span>
                                        <span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="#" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <ul class="pagination float-right">
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#first">1</a></li>
                            <li class="page-item"><a class="page-link" href="#second">2</a></li>
                            <li class="page-item"><a class="page-link" href="#third">3</a></li>
                            <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
