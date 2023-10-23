<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar2 activePage="event"></x-navbars.sidebar2>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.navok titlePage="Event"></x-navbars.navs.navok>
        <!-- End Navbar -->
        <div class="container-fluid my-5 mt-5">

            <div class="row">
                <div class="col-1 d-flex align-items-center">
                    <i class="fas fa-user" style="font-size: 1rem; color: black; "></i>
                </div>
                <div class="col-3 text-start mt-5">
                    <h1 class="d-flex text-start align-items-start"
                        style="color: rgb(0, 0, 0); font-size: 24px; font-weight: bold; margin-right: 5px;">
                        Event
                    </h1>
                </div>
            </div>
            <div class="modal-body">

                <div class="profile-img mb-3"
                    style="display: flex; height: 200px; margin: 0; position: relative; border-radius: 20px">
                    <img src="{{ asset('assets/img/log1.png') }}" alt="profile-img" width="100%"
                        style="opacity: 0.9; border-radius: 20px" />
                    <div
                        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                        <h1 style="color: white; font-size: 38px; ">Seleksi Wirausaha Muda</h1>

                    </div>
                </div>

                <div class="card py-4 px-4 mt-5" style="border-radius: 10px; background-color: #ffffff; position:relative;">
                    <h1 class="d-flex text-center align-items-center mb-5"
                        style="color: rgb(0, 0, 0); font-size: 16px; font-weight: bold;">Deskripsi Event :
                    </h1>
                    <h1 class="d-flex text-center align-items-center"
                        style="color: rgb(0, 0, 0); font-size: 14px; font-weight: 100;">
                    </h1>

                </div>
                <div class="card py-4 mt-5 px-4" style="border-radius: 10px; background-color: #ffffff; position:relative;">
                    <h1 class="d-flex text-center align-items-center "
                        style="color: rgb(0, 0, 0); font-size: 16px; font-weight: bold;">Form Pendaftaran
                    </h1>
                    <div class="container py-5 px-5">
                        <form method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-7">

                                    <div class="input-group input-group-outline mt-3 h-300px">
                                        <label class="form-label">Nama *</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            name="nama">
                                    </div>
                                    <div class="input-group input-group-outline mt-3 h-300px">
                                        <label class="form-label">Alamat *</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            name="nama">
                                    </div>
                                    <label class="form-label my-3">Foto Profile :</label>
                                    <div class="input-group input-group-outline ">
                                        <div class="d-flex align-items-center">
                                            <input type="file" class="form-control" id="gambar" name="gambar[]"
                                                accept=".jpg, .jpeg, .png">

                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 mt-5"
                                style="background-color: #0057FF;">SIMPAN</button>
                                </div>
                            </div>
                        </form>
                    </div>


                    <x-footers.auth></x-footers.auth>
                </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>
