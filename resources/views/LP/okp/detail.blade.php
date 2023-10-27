@extends('template_front.layout')

@section('content')
@section('title', 'Home')
<div id="carouselHome" class="carousel slide " data-bs-ride="false">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner ">
        <div class="carousel-item active">
            <img src="{{ asset('') }}front/images/slider/slider-1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block mt--4 half-black">
                <h5 class="fw-bold">SELAMAT DATANG DI SILAPEM</h5>
                <h1>Sistem Informasi Layanan Kepemudaan</h1>
                <!-- <p class="text-white">Lorem ipsum dolor sit amet consectetuer adipiscing phasellus hendrerit lorem dolor sit amet
                    magna nibh nec urna in nisi neque aliquet ve, dapibus id dolor sit amet magna aliqu amet.
                </p>
                <a class="default-button" href="/">Learn More</a> -->
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('') }}front/images/slider/slider-3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block mt--4 half-black">
                <h5 class="fw-bold">SELAMAT DATANG DI SILAPEM</h5>
                <h1>Sistem Informasi Layanan Kepemudaan</h1>
                <!--<p>Lorem ipsum dolor sit amet consectetuer adipiscing phasellus hendrerit lorem dolor sit amet
                    magna nibh nec urna in nisi neque aliquet ve, dapibus id dolor sit amet magna aliqu amet.
                </p>
                <a class="default-button" href="">Learn More</a> -->
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('') }}front/images/slider/slider-2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block mt--4 half-black">
                <h5 class="fw-bold">SELAMAT DATANG DI SILAPEM</h5>
                <h1>Sistem Informasi Layanan Kepemudaan</h1>
                <!--<p>Lorem ipsum dolor sit amet consectetuer adipiscing phasellus hendrerit lorem dolor sit amet
                    magna nibh nec urna in nisi neque aliquet ve, dapibus id dolor sit amet magna aliqu amet.
                </p>
                <a class="default-button" href="">Learn More</a> -->
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

@include('template_front.support')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    {{-- <!-- Navbar -->
    <x-navbars.navs.auth titlePage='dashboard'></x-navbars.navs.auth>
    <!-- End Navbar --> --}}
    <div class="container-fluid py-4">
        <div class="col-12 text-center">
            <h1 class="text-center" style="color: rgb(0, 0, 0); font-size: 24px; font-weight: bold; margin-right: 5px;">
                Bio OKP
            </h1>
        </div>
        <div class="card col col-md-12 py-4" style="border-radius: 10px; background-color: #293679; position:relative;">
            <div class="row">
                <div class="col-2">
                    <div style="position:relative" class="col-12 d-flex justify-content-end mt-n1">
                        <a class="nav-link text-start p-0" id="profile" style="margin-left: 500px;">
                            <div class="position-relative"
                                style="width: 180px; height: 180px; overflow: hidden; border-radius: 50%; border: 5px solid white;">
                                @if ($okp->logo != null)
                                    <img src="{{ asset('logo/okp/' . $okp->logo) }}" alt="profile-img"
                                        class="img-fluid mb-n8" style="object-fit: cover; width: 100%; height: 100%;" />
                                @else
                                    <img src="{{ asset('foto/default.png') }}" alt="profile-img" class="img-fluid mb-n8"
                                        style="object-fit: cover; width: 100%; height: 100%;" />
                                @endif
                            </div>
                        </a>
                    </div>


                </div>
                <div class="col-4 mt-3">
                    <h1 class="d-flex text-center align-items-center"
                        style="color: rgb(255, 255, 255); font-size: 24px; font-weight: bold;">
                        {{ $okp->nama }}
                    </h1>
                    <h1 class="d-flex text-center align-items-center"
                        style="color: rgb(255, 255, 255); font-size:18px; font-weight: 100;">
                        <i style="color: red" class="fa fa-envelope"></i> {{ $okp->email }}
                    </h1>
                    <h1 class="d-flex text-center align-items-center"
                        style="color: rgb(255, 255, 255); font-size:18px; font-weight: 100;">
                        <i class="fa fa-globe" style="color: red"></i> {{ $okp->website }}
                    </h1>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-11">
                            <div class="container">
                                <h1 class="text-start mb-4"
                                    style="color: rgb(255, 255, 255); font-size: 18px; font-weight: 100; white-space: pre-line;">
                                    <i style="color: red" class="fa fa-map-marker"></i> Lokasi Terkini :
                                    {{ $okp->alamat_jln }}, {{ $okp->kota }}, {{ $okp->provinsi }},
                                    {{ $okp->kode_pos }}
                                </h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <div class="container">
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <div class="card text-center" style="border-radius: 10px; background-color: #293679;">
                        <h1 class="d-flex justify-content-center align-items-center"
                            style="color: rgb(255, 255, 255); font-size: 18px; font-weight: bold; height: 50px;">
                            Join Event : 20
                        </h1>
                    </div>
                </div>
            </div>


            <div class="row mt-5">

                <div class="col-4 text-center">

                </div>

                <div class="col-4 text-center">

                </div>

            </div>
        </div>



        {{-- <x-footers.auth></x-footers.auth> --}}
    </div>
</main>



@endsection
