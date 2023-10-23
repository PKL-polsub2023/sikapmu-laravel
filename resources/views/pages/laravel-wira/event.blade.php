<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <x-navbars.sidebar2 activePage="event"></x-navbars.sidebar2>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.navok titlePage="Event"></x-navbars.navs.navok>
        <!-- End Navbar -->
        <div class="container-fluid my-5 mt-5">

            <div class="row">
                <div class="col-1 d-flex align-items-center">
                    <i class="fas fa-user" style="font-size: 1rem; color: black; "></i>
                </div>
                <div class="col-3 text-start">
                    <h1 class="d-flex text-start align-items-start"
                        style="color: rgb(0, 0, 0); font-size: 24px; font-weight: bold; margin-right: 5px;">
                        Event
                    </h1>
                </div>
            </div>


            <div class="container mt-3 position: relative;">
                <div class="scroll-container2">
                    <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                        <div class="profile-img" style="height: 200px;">
                            <img src="{{ asset('assets/img/dum_4.png') }}" alt="profile-img" width="100%" />
                        </div>
                        <h1 class="text-start mx-4 mb-4"
                            style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Seleksi Wirausaha Muda 2023
                        </h1>

                        <h1 class="text-start mx-4 mb-4"
                            style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Acara Seleksi wirausaha muda
                            ...
                        </h1>
                        <div class="text-start mx-4 mb-5">
                            <a class="btn text-start align-items-center" href="seemore"
                                style="background-color: #4C6FFF; text-align: center;">
                                <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                    <i></i></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                        <div class="profile-img" style="height: 200px;">
                            <img src="{{ asset('assets/img/dum_5.png') }}" alt="profile-img" width="100%" />
                        </div>
                        <h1 class="text-start mx-4 mb-4"
                            style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Seleksi Pemuda Pelopor 2023
                        </h1>
                        <h1 class="text-start mx-4 mb-4"
                            style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Acara seleksi pemuda pelopor
                            2023 ...
                        </h1>
                        <div class="text-start mx-4 mb-5">
                            <a class="btn text-start align-items-center" href="seemore"
                                style="background-color: #4C6FFF; text-align: center;">
                                <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                    <i></i></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                        <div class="profile-img" style="height: 200px;">
                            <img src="{{ asset('assets/img/dum_6.png') }}" alt="profile-img" width="100%" />
                        </div>
                        <h1 class="text-start mx-4 mb-4"
                            style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Webminar OKP 2023
                        </h1>
                        <h1 class="text-start mx-4 mb-4"
                            style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Acara webminar untuk anggota
                            OKP ...
                        </h1>
                        <div class="text-start mx-4 mb-5">
                            <a class="btn text-start align-items-center" href="seemore"
                                style="background-color: #4C6FFF; text-align: center;">
                                <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                    <i></i></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                        <div class="profile-img" style="height: 200px;">
                            <img src="{{ asset('assets/img/dum_2.png') }}" alt="profile-img" width="100%" />
                        </div>
                        <h1 class="text-start mx-4 mb-4"
                            style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Seleksi Wirausaha Muda 2023
                        </h1>

                        <h1 class="text-start mx-4 mb-4"
                            style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Acara Seleksi wirausaha muda
                            ...
                        </h1>
                        <div class="text-start mx-4 mb-5">
                            <a class="btn text-start align-items-center" href="seemore"
                                style="background-color: #4C6FFF; text-align: center;">
                                <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                    <i></i></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                        <div class="profile-img" style="height: 200px;">
                            <img src="{{ asset('assets/img/dum_1.png') }}" alt="profile-img" width="100%" />
                        </div>
                        <h1 class="text-start mx-4 mb-4"
                            style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Seleksi Pemuda Pelopor 2023
                        </h1>
                        <h1 class="text-start mx-4 mb-4"
                            style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Acara seleksi pemuda pelopor
                            2023 ...
                        </h1>
                        <div class="text-start mx-4 mb-5">
                            <a class="btn text-start align-items-center" href="seemore"
                                style="background-color: #4C6FFF; text-align: center;">
                                <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                    <i></i></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                        <div class="profile-img" style="height: 200px;">
                            <img src="{{ asset('assets/img/dum_3.png') }}" alt="profile-img" width="100%" />
                        </div>
                        <h1 class="text-start mx-4 mb-4"
                            style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Webminar OKP 2023
                        </h1>
                        <h1 class="text-start mx-4 mb-4"
                            style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Acara webminar untuk anggota
                            OKP ...
                        </h1>
                        <div class="text-start mx-4 mb-5">
                            <a class="btn text-start align-items-center" href="seemore"
                                style="background-color: #4C6FFF; text-align: center;">
                                <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                    <i></i></i>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="navigation">
                    <button id="backx"
                        style="position: absolute; top: 45%; right: 92%; transform: translate(-50%, -50%); border: none; background-color: #fff; border-radius: 50%; width: 40px; height: 40px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);">
                        <i class="fas fa-arrow-left" style="color: #000;"></i>
                    </button>

                    <button id="nextx"
                        style="position: absolute; top: 45%; left: 98%; transform: translate(-50%, -50%); border: none; background-color: #fff; border-radius: 50%; width: 40px; height: 40px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);">
                        <i class="fas fa-arrow-right" style="color: #000;"></i>
                    </button>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const scrollContainer = document.querySelector(".scroll-container2");
        const cards = document.querySelectorAll(".card");
        const backBtn = document.getElementById("backx");
        const nextBtn = document.getElementById("nextx");
        let scrollPosition = 0;
        const cardWidth = cards[0].offsetWidth + 10; // Lebar card + margin-right

        nextBtn.addEventListener("click", function() {
            scrollPosition += cardWidth;
            if (scrollPosition > (cards.length - 3) * cardWidth) {
                scrollPosition = (cards.length - 3) * cardWidth;
            }
            scrollContainer.style.transform = `translateX(-${scrollPosition}px)`;
        });

        backBtn.addEventListener("click", function() {
            scrollPosition -= cardWidth;
            if (scrollPosition < 0) {
                scrollPosition = 0;
            }
            scrollContainer.style.transform = `translateX(-${scrollPosition}px)`;
        });
    });
</script>

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
