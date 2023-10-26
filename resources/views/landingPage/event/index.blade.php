<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-navbars.navs.navland titlePage="Landing"></x-navbars.navs.navland>
        <div class="profile-img" style="display: flex; height: 400px; margin: 0; position: relative;">
            <img src="{{ asset('assets/img/foto_1 (2).jpg') }}" alt="profile-img" width="100%"
                style="opacity: 0.9;" />
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                <h1 style="color: white; font-size: 38px; ">SELAMAT DATANG DI SIKAPMU</h1>
                <h1 style="color: white; font-size: 24px; font-weight: 100;">Sistem Informasi Kepemudaan</h1>
            </div>
        </div>
        <h1 class="text-center mt-5 mb-2" style="color: rgb(0, 0, 0); font-size: 22px; font-weight: bold;">Daftar
            Event
        </h1>
        <div class="container mt-3 position: relative;">
            <div class="row">
                @foreach ($event as $item)
                    <div class="col-4 mb-5">
                        <div class="card mt-3 px-5 py-5" style="border-radius: 10px; ">
                            <a class="nav-link text-center p-0" id="profile">
                                <div class="profile-img"
                                    style="height: 200px; display: flex; align-items: center; justify-content: center;">
                                    <center>
                                        <img src="{{ asset('foto/event/' . $item->foto) }}" alt="profile-img"
                                            width="100%" />
                                    </center>

                                </div>
                            </a>
                            <h1 class="text-start mx-1 mb-4 mt-5"
                                style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">
                                {{ $item->judul }}
                            </h1>
                            <h1 class="text-start mx-1 mb-2"
                                style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">
                                {{ $item->deskripsi }}
                            </h1>
                            <div class="text-start mx-1 mb-1">
                                <a class="btn text-start align-items-center"
                                    href="{{ route('event.landingPage.detail', $item->id_event) }}"
                                    style="background-color: #4C6FFF; text-align: center;">
                                    <i class="text-white" style="text-transform: none; font-style: normal;">See more <i
                                            class="fas fa-arrow-right"></i></i>
                                </a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
            <center>
                {{ $event->links() }}
            </center>
            {{-- <div class="navigations">
                <button id="back"
                    style="position: absolute; top: 45%; right: 92%; transform: translate(-50%, -50%); border: none; background-color: #fff; border-radius: 50%; width: 40px; height: 40px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);">
                    <i class="fas fa-arrow-left" style="color: #000;"></i>
                </button>

                <button id="next"
                    style="position: absolute; top: 45%; left: 98%; transform: translate(-50%, -50%); border: none; background-color: #fff; border-radius: 50%; width: 40px; height: 40px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);">
                    <i class="fas fa-arrow-right" style="color: #000;"></i>
                </button>
            </div> --}}
        </div>


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
