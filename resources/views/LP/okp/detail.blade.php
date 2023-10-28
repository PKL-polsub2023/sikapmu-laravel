@extends('template_front.layout')
<link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}">
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
    <div class="col col-12 col-md-12">
        <div class="card">
            <div class="img">
                @if ($okp->logo != null)
                    <img src="{{ asset('logo/okp/' . $okp->logo) }}">
                @else
                    <img src="{{ asset('foto/default.png') }}">
                @endif
            </div>
            <div class="infos">
                <div class="name">
                    <h2>{{ $okp->nama }} @if ($okp->singkatan != null)
                            ({{ $okp->singkatan }})
                        @endif
                    </h2>
                    <h4>{{ $okp->kategori_org }}</h4>
                    <h4>{{ $okp->email }}</h4>
                </div>
                <p class="text">
                    @if ($okp->alamat_jalan != null)
                        {{ $okp->alamat_jalan }},
                        @endif @if ($okp->kota != null)
                            {{ $okp->kota }}
                            @endif @if ($okp->provinsi != null)
                                ,
                                {{ $okp->provinsi }}
                                @endif @if ($okp->kode_pos != null)
                                    , {{ $okp->kode_pos }}
                                @endif
                </p>
                <ul class="stats">
                    <li>
                        <h3>{{ $join_event }}</h3>
                        <h4>Join Event</h4>
                    </li>
                    <li>
                        <h3>{{ $join_loker }}</h3>
                        <h4>Join Lamaran</h4>
                    </li>
                </ul>
                {{-- <div class="links">
                    <button class="follow">Follow</button>
                    <button class="view">View profile</button>
                </div> --}}
            </div>
        </div>
    </div>

</main>



@endsection
