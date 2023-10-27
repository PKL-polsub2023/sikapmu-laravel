<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="user-profile"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Data Umum"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid my-5 mt-5">

            <div class="row">
                <div class="col-1 d-flex align-items-center">
                    <i class="fas fa-user" style="font-size: 1rem; color: black; "></i>
                </div>
                <div class="col-3 text-start">
                    <h1 class="d-flex text-start align-items-start"
                        style="color: rgb(0, 0, 0); font-size: 24px; font-weight: bold; margin-right: 5px;">
                        Update Bio
                    </h1>
                </div>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('wiramuda.updatebio') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-7">
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">Nama Depan</label>
                                        <input type="text"
                                            class="form-control @error('namaDepan') is-invalid @enderror"
                                            name="namaDepan" value="{{ $namaDepan }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">Nama Belakang</label>
                                        <input type="text"
                                            class="form-control @error('namaBelakang') is-invalid @enderror"
                                            name="namaBelakang" value="{{ $namaBelakang }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">Umur</label>
                                        <input type="text" class="form-control @error('umur') is-invalid @enderror"
                                            name="umur" value="{{ $wirausaha->umur }}">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group input-group-outline mt-3">
                                <label class="form-label">TTL</label>
                                <input type="text" class="form-control @error('ttl') is-invalid @enderror"
                                    name="ttl" value="{{ $wirausaha->ttl }}">
                            </div>
                            <div class="input-group input-group-outline mt-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ $wirausaha->email }}">
                            </div>
                            <div class="input-group input-group-outline mt-3">
                                <label class="form-label">No Hp</label>
                                <input type="text" class="form-control @error('kontak') is-invalid @enderror"
                                    name="kontak" value="{{ $wirausaha->kontak }}">
                            </div>

                            {{-- <div class="row">
                                <div class="col-6">
                                    <label class="form-label my-3">Nama Desa/Kelurahan :</label>
                                    <div class="input-group input-group-outline ">

                                        <select class="form-select" name="role" required>
                                            <option value="">Pilih jenis...</option>
                                            <option value="Pemuda Pelopor">Dangdeur 1</option>
                                            <option value="Wirausaha Muda">dangdeur 2</option>
                                            <option value="OKP">dangdeur 3</option>
                                            <option value="Admin">dangdeur 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label my-3">Kecamatan :</label>
                                    <div class="input-group input-group-outline ">

                                        <select class="form-select" name="role" required>
                                            <option value="">Pilih jenis...</option>
                                            <option value="Pemuda Pelopor">Subang 1</option>
                                            <option value="Wirausaha Muda">Subang 2</option>
                                            <option value="OKP">Subang 3</option>
                                            <option value="Admin">Subang 4</option>
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="input-group input-group-outline mt-3 h-300px">
                                <label class="form-label">Alamat Lengkap</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                    name="alamat" value="{{ $wirausaha->alamat }}">
                            </div>

                            <label class="form-label my-3">Foto Profile :</label>
                            <div class="input-group input-group-outline ">
                                <div class="d-flex align-items-center">
                                    <input type="file" class="form-control" id="foto" name="foto"
                                        accept=".jpg, .jpeg, .png">

                                </div>

                                <button type="submit" class="btn bg-gradient-dark">Submit</button>
                                <a class="btn bg-gradient-dark" onclick="create()">Ubah Password</a>
                            </div>



                        </div>



                </form>


            </div>
        </div>



        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('password', $wirausaha->id) }}" method="POST">
                            @csrf
                            <label for="password">Kata Sandi</label>
                            <input type="password" name="password" class="form-control border border-2 p-2">
                        
                            <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                            <input type="password" name="password_confirmation" class="form-control border border-2 p-2">
                           
                            <br>
                            <button class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>
<script>
    function create() {
               $("#exampleModalLabel").html('Ubah Password');
               $("#exampleModal").modal('show');
       }

</script>
