<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="DataUmum"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Data Umum"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            {{-- Alert --}}
            <div style="display: none" id="alert-success" class="alert alert-success alert-dismissible text-white"
                role="alert">
                <span class="text-sm">Berhasil</span>
                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- End Alert --}}
            <div class="row">
                <div class="col-12">

                    <div class="me-3 my-3 text-start">
                        <a href="/pemuda/create" class="btn bg-0057FF mb-0"
                           style="background-color: #0057FF;">
                            <i class="text-sm text-white">Tambah Data</i>
                        </a>
                    </div>

                    <div class="card-body px-0 pb-2">
                        <i class="text-sm text-black">Data Umum</i>
                        <div class="table-responsive p-0">
                            <table style="width:100%" id="umum" class="display">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                            No
                                        </th>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tahun
                                        </th>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                            Jumlah</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dp as $data)
                                        <tr>
                                            <td class="align-middle text-center"></td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">{{ $data->tahun }}
                                                </p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $data->jumlah }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="me-n2 my-3 text-start">
                                                            <a class="btn btn-sm bg-warning mb-0 w-100"
                                                                href="{{ route('pemuda.edit', $data->id_data_pemuda) }}" style="background-color: #0057FF;">
                                                                <i class="text-sm text-white">UBAH</i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="me-n2 my-3 text-start">
                                                            <a class="btn btn-sm bg-danger mb-0 h-25 w-100"
                                                                href="{{ route('pemuda.destroy', $data->id_data_pemuda) }}" style="background-color: #0057FF;">
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

</x-layout>




{{-- End Modal Edit --}}


{{-- End Modal Verifikasi --}}

<script src="{{ asset('assets/js/pribadi/umum-admin.js') }}"></script>
