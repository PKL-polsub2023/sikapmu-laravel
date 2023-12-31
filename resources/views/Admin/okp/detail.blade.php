<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <link rel="stylesheet" href="{{ asset('assets/css/kepengurusan.css') }}">
    <x-navbars.sidebar activePage='dataOKP'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Data OKP'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="col-3 text-start">
                <h1 class="d-flex text-start align-items-start"
                    style="color: rgb(0, 0, 0); font-size: 24px; font-weight: bold; margin-right: 5px;">
                    Data OKP
                </h1>
            </div>
            <div class="card py-4 px-4" style="border-radius: 10px; background-color: #293679; position:relative;">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-4 mt-3">
                        <h1 class="d-flex text-center align-items-center"
                            style="color: rgb(255, 255, 255); font-size: 24px; font-weight: bold;">
                            {{ $user->nama }} @if ($user->singkatan != null)
                                ({{ $user->singkatan }})
                            @endif
                        </h1>
                        <h1 class="d-flex text-center align-items-center"
                            style="color: rgb(255, 255, 255); font-size:18px; font-weight: 100;">
                            {{ $user->kategori_org }}
                        </h1>
                    </div>
                    <div class="col-6">


                        <div class="container">
                            <h1 class="text-start mb-4"
                                style="color: rgb(255, 255, 255); font-size: 18px; font-weight: 100; white-space: pre-line;">
                                <i style="color: red" class="fa fa-map-marker"></i> Lokasi Terkini :
                                {{ $user->alamat_jln }}, {{ $user->kota }}, {{ $user->provinsi }},
                                {{ $user->kode_pos }}
                            </h1>
                        </div>


                    </div>
                </div>

            </div>

            <div class="col-2 d-flex justify-content-end mt-n7">
                <a class="nav-link text-start p-0" id="profile" style="margin-left: 500px;">
                    <div class="position-relative"
                        style="width: 180px; height: 180px; overflow: hidden; border-radius: 50%; border: 5px solid white;">
                        @if ($user->logo != null)
                            <img src="{{ asset('logo/okp/' . $user->logo) }}" alt="profile-img" class="img-fluid mb-n8"
                                style="object-fit: cover; width: 100%; height: 100%;" />
                        @else
                            <img src="{{ asset('foto/default.png') }}" alt="profile-img" class="img-fluid mb-n8"
                                style="object-fit: cover; width: 100%; height: 100%;" />
                        @endif
                    </div>
                </a>
            </div>

            <div class="isi-struktur">
                <div class="col-12 text-start">
                    <h1 class="d-flex text-start align-items-start"
                        style="color: rgb(0, 0, 0); font-size: 24px; font-weight: bold; margin-right: 5px;">
                        Struktur Kepengurusan OKP
                    </h1>
                </div>
                <div style="background: #293679" class="struktur h-100 border-radius-lg ">
                    <div class="org-chart">
                        <div class="node mt-2">
                            <div class="title">Ketua</div>
                            <p>
                                @if ($ketua->nama_ketua != null)
                                    {{ $ketua->nama_ketua }}
                                @else
                                    Tidak Terdefinisi
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="org-chart">
                        <div class="node">
                            <div class="title">Sekretaris</div>
                            <p>
                                @if ($sekretaris->nama_skre != null)
                                    {{ $sekretaris->nama_skre }}
                                @else
                                    Tidak Terdefinisi
                                @endif
                            </p>
                        </div>
                        <div class="node">
                            <div class="title">Bendahara</div>
                            <p>
                                @if ($bendahara->nama_bend != null)
                                    {{ $bendahara->nama_bend }}
                                @else
                                    Tidak Terdefinisi
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>

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
<script src="{{ asset('assets/js/pribadi/table-edit.js') }}"></script>
