<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar2 activePage="updatebiop"></x-navbars.sidebar2>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.navok titlePage="Data Bio"></x-navbars.navs.navok>
        <!-- End Navbar -->
        <div class="container-fluid my-5 mt-5">

            <div class="row">
                <div class="col-1 d-flex align-items-center">
                    <i class="fas fa-user" style="font-size: 1rem; color: black; "></i>
                </div>
                <div class="col-3 text-start">
                    <h1 class="d-flex text-start align-items-start"
                        style="color: rgb(0, 0, 0); font-size: 24px; font-weight: bold; margin-right: 5px;">
                        Data Bio
                    </h1>
                </div>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-7">
                            <div class="input-group input-group-outline mt-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama">
                            </div>
                            <div class="input-group input-group-outline mt-3">
                                <label class="form-label">TTL</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama">
                            </div>
                            <div class="col-6">
                                <div class="input-group input-group-outline mt-3">
                                    <label class="form-label">Agama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        name="nama">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-outline mt-3" style="margin-right: 100px">
                                        <label class="form-label">Pendidikan Terakhir</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            name="nama">
                                    </div>
                                </div>
                            </div>

                                <div class="input-group input-group-outline mt-3">
                                    <label class="form-label">Alamat Lengkap</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        name="nama">
                                </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-outline mt-3" style="margin-right: 100px">
                                        <label class="form-label">Kode pos</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            name="nama">
                                    </div>
                                </div>
                            </div>

                            <div class="input-group input-group-outline mt-3">
                                <label class="form-label">No.Hp/Whatsapp</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama">
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="input-group input-group-outline mt-3" style="margin-right: 100px">
                                        <label class="form-label">Email/Sosial Media</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            name="nama">
                                    </div>
                                </div>
                            </div>



                            <div class="input-group input-group-outline mt-3">
                                <label class="form-label">Status Pernikahan</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama">
                            </div>

                            <div class="input-group input-group-outline mt-3">
                                <label class="form-label">Data Keluarga</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama">
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-5 "
                                style="background-color: #0057FF;">SIMPAN</button>
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

