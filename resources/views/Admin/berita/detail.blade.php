<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="Berita"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Detail Berita"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">

            <div class="card " style="margin-right: 500px">
                <div class="card-body">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="{{ asset('foto/berita/' . $berita->foto) }}" alt="" style="width:20%">
                    </center>

                    <div id="error-messages" class="alert alert-primary alert-dismissible text-white"
                        style="display: none">
                    </div>
                    <a href="{{ route('berita.index') }}" id="back" class="back" hidden> back</a>
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="judul" name="judul" required
                                    style="border: 2px solid #92929D;" placeholder="Judul Berita"
                                    value="{{ $berita->judul }}">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="kategori">
                            <option value="" selected disabled>-- Pilih Kategori --</option>
                            <option value="Wirausaha" @if ($berita->kategori == 'Wirausaha') selected @endif>Wirausaha
                            </option>
                            <option value="Kepemudaan" @if ($berita->kategori == 'Kepemudaan') selected @endif>Kepemudaan
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea type="text" class="form-control" id="isi" name="isi" required style="border: 2px solid #92929D;"
                            placeholder="Isi Berita">{{ $berita->isi }}</textarea>

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
    <script src="{{ asset('assets/js/pribadi/berita-admin.js') }}"></script>
</x-layout>
