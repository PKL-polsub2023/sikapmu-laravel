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

        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            {{-- <!-- Navbar -->
            <x-navbars.navs.auth titlePage='dashboard'></x-navbars.navs.auth>
            <!-- End Navbar --> --}}
            <div class="container-fluid py-4">
                <div class="col-3 text-start">
                    <h1 class="d-flex text-start align-items-start"
                        style="color: rgb(0, 0, 0); font-size: 24px; font-weight: bold; margin-right: 5px;">
                        Bio Pemuda Pelopor
                    </h1>
                </div>
                <div class="card col col-md-12 py-4"
                    style="border-radius: 10px; background-color: #293679; position:relative;">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-4 mt-3">
                            <h1 class="d-flex text-center align-items-center"
                                style="color: rgb(255, 255, 255); font-size: 24px; font-weight: bold;">
                                {{ $pelopor->nama }}
                            </h1>
                            <h1 class="d-flex text-center align-items-center"
                                style="color: rgb(255, 255, 255); font-size:18px; font-weight: 100;">{{ $pelopor->ttl }}
                            </h1>
                            <h1 class="d-flex text-center align-items-center"
                                style="color: rgb(255, 255, 255); font-size:18px; font-weight: 100;">
                                {{ $pelopor->agama }}
                            </h1>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-11">
                                    <div class="container">
                                        <h1 class="text-start mb-4"
                                            style="color: rgb(255, 255, 255); font-size: 18px; font-weight: 100; white-space: pre-line;">
                                            <i style="color: red" class="fa fa-map-marker"></i> Lokasi Terkini :
                                            {{ $pelopor->alamat }}
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
                            @if ($pelopor->foto != null)
                                <img src="{{ asset('foto/pelopor/' . $pelopor->foto) }}" alt="profile-img"
                                    class="img-fluid mb-n8" style="object-fit: cover; width: 100%; height: 100%;" />
                            @else
                                <img src="{{ asset('foto/default.png') }}" alt="profile-img" class="img-fluid mb-n8"
                                    style="object-fit: cover; width: 100%; height: 100%;" />
                            @endif
                        </div>
                    </a>
                </div>
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-6 text-center">
                            <div class="card text-center" style="border-radius: 10px; background-color: #293679;">
                                <h1 class="d-flex justify-content-center align-items-center"
                                    style="color: rgb(255, 255, 255); font-size: 18px; font-weight: bold; height: 50px;">
                                    Join Event
                                </h1>
                                <h1 class="d-flex justify-content-center align-items-center"
                                    style="color: rgb(255, 255, 255); font-size: 18px; font-weight: bold; height: 50px;">
                                    {{ $join_event }}
                                </h1>
                            </div>
                        </div>
                        <div class="col-6 text-center">
                            <div class="card text-center" style="border-radius: 10px; background-color: #293679;">
                                <h1 class="d-flex justify-content-center align-items-center"
                                    style="color: rgb(255, 255, 255); font-size: 18px; font-weight: bold; height: 50px;">
                                    Join Event
                                </h1>
                                <h1 class="d-flex justify-content-center align-items-center"
                                    style="color: rgb(255, 255, 255); font-size: 18px; font-weight: bold; height: 50px;">
                                    {{ $join_loker }}
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


        <x-footers.footer></x-footers.guest>
    </main>
    <x-plugins></x-plugins>

</x-layout>
<script>
    var data = {
        datasets: [{
            label: "Donut Chart",
            data: [36, 25, 25, 14],
            backgroundColor: ["#F94144", "#FFB320", "#5D5FEF", "#55BEEB"],
        }, ],
    };
    var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "doughnut",
        data: data,
    });

    var data2 = {
        datasets: [{
            label: "Donut Chart",
            data: [53, 32, 25, 12],
            backgroundColor: ["#F94144", "#FFB320", "#5D5FEF", "#55BEEB"],
        }, ],
    };
    var ctx2 = document.getElementById("myChart2").getContext("2d");
    var myChart2 = new Chart(ctx2, {
        type: "doughnut",
        data: data2,
    });

    var data3 = {
        datasets: [{
            label: "Donut Chart",
            data: [13, 42, 25, 70],
            backgroundColor: ["#F94144", "#FFB320", "#5D5FEF", "#55BEEB"],
        }, ],
    };
    var ctx3 = document.getElementById("myChart3").getContext("2d");
    var myChart2 = new Chart(ctx3, {
        type: "doughnut",
        data: data3,
    });
</script>
<style>
    .cards {
        width: 10px;
        /* Sesuaikan lebar kartu sesuai kebutuhan */
        height: 10px;
        /* Sesuaikan tinggi kartu sesuai kebutuhan */
        border-radius: 50%;
        /* Memberikan bentuk lingkaran dengan radius 50% */

    }
</style>
<style>
    .container {
        overflow: hidden;
        width: 100%;
        white-space: nowrap;
        position: relative;
    }

    .scroll-container {
        display: inline-block;
        transition: transform 0.3s;
    }

    .scroll-container2 {
        display: inline-block;
        transition: transform 0.3s;
    }

    .scroll-container3 {
        display: inline-block;
        transition: transform 0.3s;
    }

    .card {
        display: inline-block;
        margin-right: 10px;
        /* Jarak antar elemen card */
        vertical-align: top;
    }

    .navigation {
        margin-top: 10px;
    }

    button {
        margin-right: 10px;
    }
</style>
