<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Data Umum"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="col-3 text-start">
                <h1 class="d-flex text-start align-items-start"
                    style="color: rgb(0, 0, 0); font-size: 24px; font-weight: bold; margin-right: 5px;">
                    Bio Wirausahawan
                </h1>
            </div>
            <div class="card py-4 px-4" style="border-radius: 10px; background-color: #293679; position:relative;">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3 mt-3">
                        <h1 class="d-flex text-center align-items-center"
                            style="color: rgb(255, 255, 255); font-size: 24px; font-weight: bold;">
                            {{ Auth::user()->nama }}
                        </h1>
                        <h1 class="d-flex text-center align-items-center"
                            style="color: rgb(255, 255, 255); font-size: 18px; font-weight: 50;">
                            {{ $wirausaha->nama_wirausaha }}
                        </h1>
                        <h1 class="d-flex text-center align-items-center"
                            style="color: rgb(255, 255, 255); font-size:18px; font-weight: 100;">{{ $wirausaha->ttl }}
                        </h1>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <!-- Menggunakan d-flex dan align-items-center untuk vertikal centering -->
                                <div class="profile-img" style="height: 20px; width:20px;">
                                    <img src="{{ asset('assets/img/map.png') }}" alt="profile-img" width="100%" />
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="container" style="max-width: 500px;">
                                    <h1 class="text-start mx-3 mb-4"
                                        style="color: rgb(255, 255, 255); font-size: 18px; font-weight: 100; white-space: pre-line;">
                                        Lokasi Terkini : Subang, Subang
                                    </h1>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-2 d-flex justify-content-end mt-n7">
                <a class="nav-link text-start p-0" id="profile" style="margin-left: 500px;">
                    <div class="position-relative"
                        style="width: 180px; height: 180px; overflow: hidden; border-radius: 50%; border: 5px solid white;">
                        <img src="{{ asset('foto/wiramuda/' . $wirausaha->foto) }}" alt="profile-img"
                            class="img-fluid mb-n8" style="object-fit: cover; width: 100%; height: 100%;" />
                    </div>
                </a>
            </div>
            <div class="container">
                <div class="row mt-5">

                    <div class="col-4 text-center">
                        <div class="card text-center" style="border-radius: 10px; background-color: #293679;">
                            <h1 class="d-flex justify-content-center align-items-center"
                                style="color: rgb(255, 255, 255); font-size: 18px; font-weight: bold; height: 50px;">
                                Pencapaian : 10
                            </h1>
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        <div class="card text-center" style="border-radius: 10px; background-color: #293679;">
                            <h1 class="d-flex justify-content-center align-items-center"
                                style="color: rgb(255, 255, 255); font-size: 18px; font-weight: bold; height: 50px;">
                                Banyak usaha : 1
                            </h1>
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        <div class="card text-center" style="border-radius: 10px; background-color: #293679;">
                            <h1 class="d-flex justify-content-center align-items-center"
                                style="color: rgb(255, 255, 255); font-size: 18px; font-weight: bold; height: 50px;">
                                Kelengkapan Data : 100 %
                            </h1>
                        </div>
                    </div>

                </div>


                <div class="row mt-5">

                    <div class="col-4 text-center">

                    </div>
                    <div class="col-4 text-center">
                        <div class="card text-center" style="border-radius: 10px; background-color: #293679;">
                            <h1 class="d-flex justify-content-center align-items-center"
                                style="color: rgb(255, 255, 255); font-size: 18px; font-weight: bold; height: 50px;">
                                Joint Event : 20
                            </h1>
                        </div>
                    </div>
                    <div class="col-4 text-center">

                    </div>

                </div>
            </div>



            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>
    </div>
    <style>
        .bg-gradient-primary {
            background: linear-gradient(90deg, #B7ECE7 0%, #B0BDF0 100%);
        }
    </style>

</x-layout>
