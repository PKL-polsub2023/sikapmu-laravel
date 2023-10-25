<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="addloker"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Tambah Post Lamaran Kerja"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">

            <div class="card " style="margin-right: 500px">
                <div class="card-body">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="error-messages" class="alert alert-primary alert-dismissible text-white"
                        style="display: none">
                    </div>
                    <a href="{{ route('event.index') }}" id="back" class="back" hidden> back</a>
                    <form id="validationForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="">Waktu Event</label>
                                    <input type="date" class="form-control" id="waktu_mulai" name="waktu_event"
                                        required style="border: 2px solid #92929D;" placeholder="Waktu">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="judul" name="judul" required
                                        style="border: 2px solid #92929D;" placeholder="Judul Event">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="jumlah_pelamar"
                                        name="jumlah_pendaftar" required style="border: 2px solid #92929D;"
                                        placeholder="Kuota Pendaftar">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="kategori">
                                <option value="" selected disabled>-- Pilih Kategori --</option>
                                <option value="Seleksi">Seleksi</option>
                                <option value="Webinar">Webinar</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" required
                                style="border: 2px solid #92929D;" placeholder="Deskripsi Lamaran"></textarea>

                        </div>
                        <div class="mb-3">
                            <textarea type="text" class="form-control" id="persyaratan" name="persyaratan" required
                                style="border: 2px solid #92929D;" placeholder="Persyaratan"></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-center">
                                <input type="file" class="form-control" id="foto" name="foto"
                                    accept=".jpg, .jpeg, .png">

                            </div>

                        </div>
                        <a href="#" onclick="Submit()" class="btn btn-primary w-100"
                            style="background-color: #0057FF;">SIMPAN</a>

                    </form>


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
