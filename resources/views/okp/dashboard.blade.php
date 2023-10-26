<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='dashboard'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="col-3 text-start">
                <h1 class="d-flex text-start align-items-start"
                    style="color: rgb(0, 0, 0); font-size: 24px; font-weight: bold; margin-right: 5px;">
                    Bio Organisasi Kepemudaan
                </h1>
            </div>
            <div class="card py-4 px-4" style="border-radius: 10px; background-color: #293679; position:relative;">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-4 mt-3">
                        <h1 class="d-flex text-center align-items-center"
                            style="color: rgb(255, 255, 255); font-size: 24px; font-weight: bold;">
                            {{ Auth::user()->nama }}
                        </h1>
                        @php
                            $m = explode("-", $user->mulai_pengurusan);
                            $a = explode("-", $user->akhir_pengurusan);
                        @endphp
                        <h1 class="d-flex text-center align-items-center"
                            style="color: rgb(255, 255, 255); font-size:18px; font-weight: 100;">Kepengurusan : {{ $m[0] }} S/D {{ $a[0] }}
                        </h1>
                    </div>
                    <div class="col-6">
                       
                                <div class="container" >
                                    <h1 class="text-start mb-4"
                                        style="color: rgb(255, 255, 255); font-size: 18px; font-weight: 100; white-space: pre-line;">
                                        Lokasi Terkini : {{ $user->alamat_jln }},{{ $user->kota }},{{ $user->provinsi }}
                                    </h1>
                                </div>
                         

                    </div>
                </div>

            </div>

            <div class="col-2 d-flex justify-content-end mt-n7">
                <a class="nav-link text-start p-0" id="profile" style="margin-left: 500px;">
                    <div class="position-relative"
                        style="width: 180px; height: 180px; overflow: hidden; border-radius: 50%; border: 5px solid white;">
                        <img src="{{ asset('logo/okp/' . $user->logo) }}" alt="profile-img"
                            class="img-fluid mb-n8" style="object-fit: cover; width: 100%; height: 100%;" />
                    </div>
                </a>
            </div>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-4"></div>
                    <div class="col-4 text-center">
                        <div class="card text-center" style="border-radius: 10px; background-color: #293679;">
                            <h1 class="d-flex justify-content-center align-items-center"
                                style="color: rgb(255, 255, 255); font-size: 18px; font-weight: bold; height: 50px;">
                                Joint Event : {{ $event }}
                            </h1>
                        </div>
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
