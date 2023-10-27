<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="DataBerita"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Data Berita"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">

                    <div class="me-3 my-3 text-start">
                        <a class="btn bg-0057FF mb-0" href="{{ route('berita.create') }}"
                            style="background-color: #0057FF;">
                            <i class="text-sm text-white">Tambah Data</i>
                        </a>
                    </div>

                    <div class="card-body px-0 pb-2">
                        <i class="text-sm text-black">Data Berita</i>
                        <div class="table-responsive p-0">
                            <table style="width:100%" id="berita" class="display">
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
                                            Kategori</th>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Tanggal</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($berita as $data)
                                        <tr>
                                            <td class="align-middle text-center text-sm"></td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">{{ $data->judul }}
                                                </p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $data->kategori }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $data->upload }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="me-n2 my-3 text-start">
                                                            <a class="btn btn-sm bg-0057FF mb-0 w-100"
                                                                href="{{ route('berita.detail', $data->id_berita) }}"
                                                                style="background-color: #0057FF;">
                                                                <i class="text-sm text-white text-center">DETAIL</i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="me-n2 my-3 text-start">
                                                            <a class="btn btn-sm bg-warning mb-0 w-100"
                                                                href="{{ route('berita.edit', $data->id_berita) }}"
                                                                style="background-color: #0057FF;">
                                                                <i class="text-sm text-white">UBAH</i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="me-n2 my-3 text-start">
                                                            <a class="btn btn-sm bg-danger mb-0 h-25 w-100"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#hapus{{ $data->id_berita }}"
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
    <script src="{{ asset('assets/js/pribadi/berita-admin.js') }}"></script>
</x-layout>

{{-- Modal Hapus --}}
@foreach ($berita as $data)
    <div class="modal fade" id="hapus{{ $data->id_berita }}" tabindex="-1" aria-labelledby="add" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="adddoc">Hapus {{ $data->judul }}</h5>
                    <button type="button" id="closed2" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body align-middle text-center">
                    <h6>Apakah Anda Yakin? Ini akan menghapus seluruh data.</h6>
                    <a href="{{ route('berita.destroy', $data->id_berita) }}" class="btn btn-success">Hapus</a>
                    <a href="#" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Batalkan</a>
                </div>
            </div>
        </div>
    </div>
@endforeach
{{-- End Modal Hapus --}}
