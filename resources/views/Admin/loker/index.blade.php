<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="DataLoker"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Data Lowongan Pekerjaan"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">

                    <div class="me-3 my-3 text-start">
                        <a class="btn bg-0057FF mb-0" href="{{ route('loker.create') }}"
                            style="background-color: #0057FF;">
                            <i class="text-sm text-white">Tambah Data</i>
                        </a>
                    </div>

                    <div class="card-body px-0 pb-2">
                        <i class="text-sm text-black">Data Lowongan Kerja</i>
                        <div class="table-responsive p-0">
                            <table style="width:100%" id="loker" class="display">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                            No
                                        </th>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                            Judul
                                        </th>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                            Instansi</th>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Tanggal</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Pelamar</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($loker as $data)
                                        <tr>
                                            <td class="align-middle text-center text-sm"></td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">{{ $data->judul }}
                                                </p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $data->instansi }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $data->waktu_mulai }}
                                                    - {{ $data->waktu_akhir }}</span>
                                            </td>
                                            <td class="">


                                                <div class="progress-wrapper w-50 mx-auto text-center">
                                                    <span style="color: #4FD1C5;">60%</span>
                                                    <div class="progress-info text-center">
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-4FD1C5 w-60" role="progressbar"
                                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="me-n2 my-3 text-start">
                                                            <a class="btn btn-sm bg-0057FF mb-0 w-100" href="#"
                                                                style="background-color: #0057FF;">
                                                                <i class="text-sm text-white text-center">DETAIL</i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="me-n2 my-3 text-start">
                                                            <a class="btn btn-sm bg-warning mb-0 w-100"
                                                                href="{{ route('loker.edit', $data->id_loker) }}"
                                                                style="background-color: #0057FF;">
                                                                <i class="text-sm text-white">UBAH</i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="me-n2 my-3 text-start">
                                                            <a class="btn btn-sm bg-danger mb-0 h-25 w-100"
                                                                href="javascript:;" style="background-color: #0057FF;">
                                                                <i class="text-sm text-white">HAPUS</i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>
    <script src="{{ asset('assets/js/pribadi/loker-admin.js') }}"></script>
</x-layout>
