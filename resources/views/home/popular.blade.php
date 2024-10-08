<!-- Page Content -->
@extends('layouts.app-master')

@section('content')

<link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
<link href="{!! url('assets/bootstrap/css/bootstrap.bundle.min.css') !!}" rel="stylesheet">
<div class="container">

    @guest
    <div class="bg-light p-5 rounded">
        <h1>Silahkan <a href="{{ route('login.show') }}">Login</a> terlebih dahulu untuk mencoba fitur ini!</h1>
    </div>
    @endguest

    @auth
    <h1>Tempat Wisata Favorit</h1>

    <!-- Carousel wrapper -->
    <div id="carouselVideoExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <video class="img-fluid" autoplay loop muted>
                    <source src="https://mdbcdn.b-cdn.net/img/video/Tropical.mp4" type="video/mp4" />
                </video>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tanjung Bira</h5>
                    <p>
                        Destinasi pantai yang indah! di Bulukumba Sulawesi Selatan!
                    </p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <video class="img-fluid" autoplay loop muted>
                    <source src="https://mdbcdn.b-cdn.net/img/video/forest.mp4" type="video/mp4" />
                </video>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <video class="img-fluid" autoplay loop muted>
                    <source src="https://mdbcdn.b-cdn.net/img/video/Agua-natural.mp4" type="video/mp4" />
                </video>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                    </p>
                </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselVideoExample"
            data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselVideoExample"
            data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel wrapper -->
</div>
@endauth
@endsection