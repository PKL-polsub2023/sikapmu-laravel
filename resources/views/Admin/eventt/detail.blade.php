<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="editevent"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Edit Post Lamaran Kerja"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="card ">
                <div class="card-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="{{ asset('foto/event/' . $event->foto) }}" alt="" style="width:20%">
                    </center>
                    <div id="error-messages" class="alert alert-primary alert-dismissible text-white"
                        style="display: none">
                    </div>
                    <a href="{{ route('event.index') }}" id="back" class="back" hidden> back</a>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="">Waktu Awal</label>
                                <input type="date" class="form-control" id="waktu_mulai" name="waktu_mulai" required
                                    style="border: 2px solid #92929D;" placeholder="Waktu"
                                    value="{{ $event->waktu_event }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="judul" name="judul" required
                                    style="border: 2px solid #92929D;" placeholder="Judul Lamaran"
                                    value="{{ $event->judul }}" readonly>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="jumlah_pelamar" name="jumlah_pelamar"
                                    required style="border: 2px solid #92929D;" placeholder="Kuota Pelamar"
                                    value="{{ $event->jumlah_pendaftar }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="instansi" name="instansi" required
                            style="border: 2px solid #92929D;" placeholder="Nama Perusahaan"
                            value="{{ $event->kategori }}" readonly>
                    </div>
                    <div class="mb-3">
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" required
                            style="border: 2px solid #92929D;" placeholder="Deskripsi Lamaran" readonly>{{ $event->deskripsi }}</textarea>

                    </div>
                    <div class="mb-3">
                        <textarea type="text" class="form-control" id="persyaratan" name="persyaratan" required
                            style="border: 2px solid #92929D;" placeholder="Persyaratan" readonly>{{ $event->persyaratan }}</textarea>
                    </div>


                </div>
            </div>

            <div class="pelamar mt-4">
                <h1 class="text-center mt-5 mb-3" style="color: rgb(78, 78, 78); font-size: 22px; ">
                    Data Pendaftar</h1>
                <h1 class="text-center mb-3" style="color: rgb(78, 78, 78); font-size: 16px; ">
                    Kuota Pendaftar : {{ $loker->jumlah_pendaftar }}</h1>
                <div class="row">
                    <center>
                        <div class="col col-6 col-md-6">
                            <table style="width:100%" id="data-event" class="display">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pendaftar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pendaftar as $data)
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
        <x-footers.auth></x-footers.auth>
    </main>
    <x-plugins></x-plugins>
    <script src="{{ asset('assets/js/pribadi/table-edit.js') }}"></script>
</x-layout>
