<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="DataLoker"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Detail Post Lamaran Kerja"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="section-content">
            <div class="container mt-3 position: relative;">
                <div class="DetailLoker">
                    <h1 class="text-center mt-5 mb-3" style="color: rgb(78, 78, 78); font-size: 22px; ">
                        {{ $loker->instansi }}</h1>
                    <div class="supp text-center mb-5">
                        <img src="{{ asset('foto/loker/' . $loker->foto) }}" style="width:100px;height:100px"
                            alt="profile-img" class="text-center" />
                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <div class="container">

                                <h5 class="text-start mb-2"
                                    style="color: rgb(0, 0, 0); font-size: 14px; font-weight:bold; ">
                                    Judul :</h5>

                                <h5 class="text-start " style="color: rgb(0, 0, 0); font-size: 14px;font-weight:100; ">
                                    {{ $loker->judul }} </h5>

                                <h5 class="text-start mb-2"
                                    style="color: rgb(0, 0, 0); font-size: 14px; font-weight:bold; ">
                                    Deskripsi :</h5>

                                <h5 class="text-start " style="color: rgb(0, 0, 0); font-size: 14px;;font-weight:100; ">
                                    {{ $loker->deskripsi }} </h5>

                                <h5 class="text-start mt-5 mb-2"
                                    style="color: rgb(0, 0, 0); font-size: 14px; font-weight:bold; ">
                                    Persyaratan : </h5>

                                <h5 class="text-start " style="color: rgb(0, 0, 0); font-size: 14px;;font-weight:100; ">
                                    {{ $loker->persyaratan }}
                                    {{-- 
                                @php
                                echo $loker->persyaratan;
                            @endphp --}}
                                </h5>

                            </div>
                        </div>


                    </div>
                </div>

                <div class="pelamar mt-4">
                    <h1 class="text-center mt-5 mb-3" style="color: rgb(78, 78, 78); font-size: 22px; ">
                        Data Pelamar</h1>
                    <h1 class="text-center mb-3" style="color: rgb(78, 78, 78); font-size: 16px; ">
                        Kuota Pelamar : {{ $loker->jumlah_pelamar }}</h1>
                    <div class="row">
                        <center>
                            <div class="col col-6 col-md-6">
                                <table style="width:100%" id="data-loker" class="display">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pelamar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pelamar as $data)
                                            <tr>
                                                <td></td>
                                                <td>{{ $data->user->nama }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </center>

                    </div>

                </div>




            </div>
        </div>

        <x-footers.auth></x-footers.auth>
    </main>
    <x-plugins></x-plugins>
    <script src="{{ asset('assets/js/pribadi/table-edit.js') }}"></script>
</x-layout>
