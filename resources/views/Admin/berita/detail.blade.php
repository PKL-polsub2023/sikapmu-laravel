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
                    <img src="{{ asset('foto/event' . $event->foto) }}" alt="">
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
                                    value="{{ $event->waktu_event }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="judul" name="judul" required
                                    style="border: 2px solid #92929D;" placeholder="Judul Lamaran"
                                    value="{{ $event->judul }}">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="jumlah_pelamar" name="jumlah_pelamar"
                                    required style="border: 2px solid #92929D;" placeholder="Kuota Pelamar"
                                    value="{{ $event->jumlah_pendaftar }}">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="instansi" name="instansi" required
                            style="border: 2px solid #92929D;" placeholder="Nama Perusahaan"
                            value="{{ $event->kategori }}">
                    </div>
                    <div class="mb-3">
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" required
                            style="border: 2px solid #92929D;" placeholder="Deskripsi Lamaran">{{ $event->deskripsi }}</textarea>

                    </div>
                    <div class="mb-3">
                        <textarea type="text" class="form-control" id="persyaratan" name="persyaratan" required
                            style="border: 2px solid #92929D;" placeholder="Persyaratan">{{ $event->persyaratan }}</textarea>
                    </div>


                </div>
            </div>



        </div>
        </div>
        </div>
        <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>
    <script src="{{ asset('assets/js/pribadi/event-admin.js') }}"></script>
</x-layout>
