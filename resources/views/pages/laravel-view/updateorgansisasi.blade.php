<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar2 activePage="updateorgan"></x-navbars.sidebar2>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.navok titlePage="Update Organisasi"></x-navbars.navs.navok>
        <!-- End Navbar -->
        <div class="container-fluid my-5 mt-5">

            <div class="row">
                <div class="col-1 d-flex align-items-center">
                    <i class="fas fa-user" style="font-size: 1rem; color: black; "></i>
                </div>
                <div class="col-3 text-start">
                    <h1 class="d-flex text-start align-items-start"
                        style="color: rgb(0, 0, 0); font-size: 24px; font-weight: bold; margin-right: 5px;">
                        Update Organisasi
                    </h1>
                </div>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-7">
                            <div class="input-group input-group-outline mt-3">
                                <label class="form-label">Nama Organisasi</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">Singkatan</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            name="nama">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group input-group-outline mt-3">
                                <label class="form-label">Nama Jenjang Tingkat Provonsi</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama">
                            </div>
                            <label class="form-label my-3">Kategori Organisasi :</label>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-outline ">

                                        <select class="form-select" name="role" required>
                                            <option value="">Pilih jenis...</option>
                                            <option value="Pemuda Pelopor">Kepemudaan</option>
                                            <option value="Wirausaha Muda">Kepemudaan 2</option>
                                            <option value="OKP">Kepemudaan 3</option>
                                            <option value="Admin">Kepemudaan 4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <label class="form-label my-3">Bentuk Organisasi :</label>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-outline ">

                                        <select class="form-select" name="role" required>
                                            <option value="">Pilih jenis...</option>
                                            <option value="Pemuda Pelopor">Wadah Berhimpun 1</option>
                                            <option value="Wirausaha Muda">Wadah Berhimpun 2</option>
                                            <option value="OKP">Wadah Berhimpun 3</option>
                                            <option value="Admin">Wadah Berhimpun 4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <label class="form-label my-3">Berhimpun di Wadah KNPI :</label>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-outline ">

                                        <select class="form-select" name="role" required>
                                            <option value="">Pilih jenis...</option>
                                            <option value="Pemuda Pelopor">Sudah Berhimpun</option>
                                            <option value="Wirausaha Muda">belum Berhimpun</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">Alamat Jalan</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            name="nama">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">Kota</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            name="nama">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">Provonsi</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            name="nama">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group input-group-outline mt-3">
                                <label class="form-label">Telp/Hp</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama">
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-5"
                                style="background-color: #0057FF;">SIMPAN</button>
                        </div>

                        <div class="col-5">
                            <div class="input-group input-group-outline mt-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama">
                            </div>
                            <div class="input-group input-group-outline mt-3">
                                <label class="form-label">Website</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama">
                            </div>
                            <label class="form-label my-3">Logo Organisasi :</label>
                            <div class="input-group input-group-outline ">
                                <div class="d-flex align-items-center">
                                    <input type="file" class="form-control" id="gambar" name="gambar[]"
                                        accept=".jpg, .jpeg, .png">

                                </div>
                            </div>




                        </div>
                    </div>



                </form>


            </div>
        </div>



        </div>

        <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>
<script>
    function updateNamaFile(input) {
        const namaInput = document.querySelector('#logoInput');
        if (input.files.length > 0) {
            const namaFile = input.files[0].name;
            namaInput.value = namaFile;
        } else {
            namaInput.value = '';
        }
    }
</script>
