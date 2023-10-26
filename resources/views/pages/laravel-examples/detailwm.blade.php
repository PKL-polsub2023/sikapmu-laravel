<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-navbars.navs.navland titlePage="Landing"></x-navbars.navs.navland>
        <div class="profile-img" style="display: flex; height: 400px; margin: 0; position: relative;">
            <img src="{{ asset('assets/img/foto_4.png') }}" alt="profile-img" width="100%" style="opacity: 0.9;" />
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                <h1 style="color: white; font-size: 38px; ">SELAMAT DATANG DI SIKAPMU</h1>
                <h1 style="color: white; font-size: 24px; font-weight: 100;">Sistem Informasi Kepemudaan</h1>
            </div>
        </div>
        <h1 class="text-center mt-5 mb-5" style="color: rgb(78, 78, 78); font-size: 22px; ">Supported By :</h1>


        {{-- <div class="row text-center">
            @foreach ($ads as $data)
                <div class="col col-4 col-md-2 mb-5">
                    <img class="mx-auto" src="{{ asset('foto/ads/' . $data->foto) }}" alt="" style="width:60%">
                </div>
            @endforeach
        </div> --}}

        <div class="supp text-center mb-5">
            <img src="{{ asset('assets/img/supported.png') }}" alt="profile-img" class="text-center" />
        </div>
       
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
                    <div class="col-2"></div>
                    <div class="col-3 mt-3">
                        <h1 class="d-flex text-center align-items-center"
                            style="color: rgb(255, 255, 255); font-size: 24px; font-weight: bold;">
                            {{ $wirausaha->nama }}
                        </h1>
                        <h1 class="d-flex text-center align-items-center"
                            style="color: rgb(255, 255, 255); font-size: 18px; font-weight: 50;">
                            {{ $wirausaha->nama_wirausaha }}
                        </h1>
                        <h1 class="d-flex text-center align-items-center"
                            style="color: rgb(255, 255, 255); font-size:18px; font-weight: 100;">{{ $wirausaha->ttl }}
                        </h1>
                    </div>
                    <div class="col-7">
                        
                                <div class="container" style="max-width: 500px;">
                                    <h1 class="text-start mx-3 mb-4"
                                        style="color: rgb(255, 255, 255); font-size: 18px; font-weight: 100; white-space: pre-line;">
                                        Alamat : {{ $wirausaha->alamat }}
                                    </h1>
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
            @php
                $je = count($event);
                $ju = count($usaha);
            @endphp
            <div class="container">
                <div class="row mt-5">
                    <div class="col-2"></div>
                    <div class="col-4 text-center">
                        <div class="card text-center" style="border-radius: 10px; background-color: #293679;">
                            <h1 class="d-flex justify-content-center align-items-center"
                                style="color: rgb(255, 255, 255); font-size: 18px; font-weight: bold; height: 50px;">
                                Banyak usaha : {{ $ju }}
                            </h1>
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        <div class="card text-center" style="border-radius: 10px; background-color: #293679;">
                            <h1 class="d-flex justify-content-center align-items-center"
                                style="color: rgb(255, 255, 255); font-size: 18px; font-weight: bold; height: 50px;">
                                Joint Event : {{ $je }}
                            </h1>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card mt-3 mb-3">
                {{-- <center>
                    <i class="text text-black mt-3 mb-3">Data Usaha</i>
                </center> --}}
                
                <div class="table-responsive p-0">
                    <table style="width:100%" id="umum" class="display">
                        <thead>
                            <tr>
                                <th
                                    class="text-uppercase text-center text-secondary text font-weight-bolder opacity-7">
                                    Nama Usaha
                                </th>
                                <th
                                    class="text-uppercase text-center text-secondary text font-weight-bolder opacity-7">
                                    Jenis Produk</th>
                                <th
                                    class="text-center text-uppercase text-secondary text font-weight-bolder opacity-7">
                                    Modal</th>
                                <th
                                    class="text-center text-uppercase text-secondary text font-weight-bolder opacity-7">
                                    Omset</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usaha as $data)
                                <tr>
                                    <td class="align-middle text-center text">
                                        <p class="text text-secondary mb-0">{{ $data->nama_usaha }}
                                        </p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span
                                            class="text-secondary text font-weight-bold">{{ $data->jenis_produk }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span
                                            class="text-secondary text font-weight-bold">{{ $data->modal }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span
                                            class="text-secondary text font-weight-bold">{{ $data->omset }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>



            <x-footers.footer></x-footers.guest>
            </main>
            <x-plugins></x-plugins>
        
        </x-layout>
    </div>
    <style>
        .bg-gradient-primary {
            background: linear-gradient(90deg, #B7ECE7 0%, #B0BDF0 100%);
        }
    </style>


