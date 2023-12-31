<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='DataUmum'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Data User Umum'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="col-3 text-start">
                <h1 class="d-flex text-start align-items-start"
                    style="color: rgb(0, 0, 0); font-size: 24px; font-weight: bold; margin-right: 5px;">
                    Data User Umum
                </h1>
            </div>
            <div class="card py-4 px-4" style="border-radius: 10px; background-color: #293679; position:relative;">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-4 mt-3">
                        <h1 class="d-flex text-center align-items-center"
                            style="color: rgb(255, 255, 255); font-size: 24px; font-weight: bold;">
                            {{ $user->nama }}
                        </h1>
                        <h1 class="d-flex text-center align-items-center"
                            style="color: rgb(255, 255, 255); font-size:18px; font-weight: 100;">{{ $user->ttl }}
                        </h1>
                    </div>
                    <div class="col-6">


                        <div class="container">
                            <h1 class="text-start mb-4"
                                style="color: rgb(255, 255, 255); font-size: 18px; font-weight: 100; white-space: pre-line;">
                                <i style="color: red" class="fa fa-map-marker"></i> Alamat : {{ $user->alamat }}
                                Lokasi Terkini : {{ $user->alamat }}
                            </h1>
                        </div>


                    </div>
                </div>

            </div>

            <div class="col-2 d-flex justify-content-end mt-n7">
                <a class="nav-link text-start p-0" id="profile" style="margin-left: 500px;">
                    <div class="position-relative"
                        style="width: 180px; height: 180px; overflow: hidden; border-radius: 50%; border: 5px solid white;">
                        @if ($user->foto != null)
                            <img src="{{ asset('foto/umum/' . $user->foto) }}" alt="profile-img" class="img-fluid mb-n8"
                                style="object-fit: cover; width: 100%; height: 100%;" />
                        @else
                            <img src="{{ asset('foto/default.png') }}" alt="profile-img" class="img-fluid mb-n8"
                                style="object-fit: cover; width: 100%; height: 100%;" />
                        @endif
                    </div>
                </a>
            </div>
            {{-- <div class="container">
                <div class="row mt-5">
                    <div class="col-2"></div>
                    <div class="col-4 text-center">
                        <div class="card text-center" style="border-radius: 10px; background-color: #293679;">
                            <h1 class="d-flex justify-content-center align-items-center"
                                style="color: rgb(255, 255, 255); font-size: 18px; font-weight: bold; height: 50px;">
                                Lamaran Saya : {{ $loker }}
                            </h1>
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        <div class="card text-center" style="border-radius: 10px; background-color: #293679;">
                            <h1 class="d-flex justify-content-center align-items-center"
                                style="color: rgb(255, 255, 255); font-size: 18px; font-weight: bold; height: 50px;">
                                Joint Event : {{ $event }}
                            </h1>
                        </div>
                    </div>

                </div>


            </div> --}}

            <div class="pendukung mt-4">
                <div class="col-12 text-start">
                    <h1 class="d-flex text-start align-items-start"
                        style="color: rgb(0, 0, 0); font-size: 24px; font-weight: bold;">
                        Data Pendukung {{ $user->nama }}
                    </h1>
                </div>
                <div class="col col-md-12 col-12">
                    <table style="width:100%" id="data-pendukung" class="display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Data Pendukung</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendukung as $data)
                                <tr>
                                    <td></td>
                                    <td>
                                        <a href="{{ asset('data') }}/{{ $data->dokumen }} "
                                            download>{{ $data->dokumen }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <x-footers.auth></x-footers.auth>
    </main>
    <x-plugins></x-plugins>

    <style>
        .bg-gradient-primary {
            background: linear-gradient(90deg, #B7ECE7 0%, #B0BDF0 100%);
        }
    </style>

</x-layout>
<script src="{{ asset('assets/js/pribadi/table-edit.js') }}"></script>
