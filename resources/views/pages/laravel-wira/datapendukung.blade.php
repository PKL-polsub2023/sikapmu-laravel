<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar2 activePage="datapendukungw"></x-navbars.sidebar2>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.navok titlePage="Data Pendukung"></x-navbars.navs.navok>
        <!-- End Navbar -->
        <div class="container-fluid my-5 mt-5">

            <div class="row">
                <div class="col-1 d-flex align-items-center">
                    <i class="fas fa-user" style="font-size: 1rem; color: black; "></i>
                </div>
                <div class="col-3 text-start mt-5">
                    <h1 class="d-flex text-start align-items-start"
                        style="color: rgb(0, 0, 0); font-size: 24px; font-weight: bold; margin-right: 5px;">
                        Data Pendukung
                    </h1>
                </div>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-7">
                            <h1 style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 100;">*Keterangan role (wajib diisi untuk OKP, Wirausaha muda, dan Pemuda Pelopor)</h1>
                            <label class="form-label my-3">Keterangan Role :</label>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-outline ">

                                        <select class="form-select" name="role" required>
                                            <option value="">Pilih jenis...</option>
                                            <option value="Pemuda Pelopor">Wirausaha Muda 1</option>
                                            <option value="Wirausaha Muda">Wirausaha Muda 2</option>
                                            <option value="OKP">Wirausaha Muda 3</option>
                                            <option value="Admin">Wirausaha Muda 4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <label class="form-label my-3">Upload Dokumen :</label>
                            <div class="input-group input-group-outline ">
                                <div class="d-flex align-items-center">
                                    <input type="file" class="form-control" id="gambar" name="gambar[]"
                                        accept=".jpg, .jpeg, .png">

                                </div>
                            </div>

                            <div class="card-body px-0 pb-2">
                                <h1 class="d-flex text-start align-items-start"
                                    style="color: rgb(0, 0, 0); font-size: 16px; font-weight: bold; margin-right: 5px;">
                                    Data Pelapor
                                </h1>
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Nama
                                                </th>
                                                <th
                                                    class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Action</th>
                                                <th class="text-secondary opacity-7"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs text-secondary mb-0">CV.pdf
                                                    </p>
                                                </td>

                                                <td class="text-center">

                                                    <div class=" text center">
                                                        <a class="btn btn-sm bg-danger mb-0 h-25 " href="javascript:;"
                                                            style="background-color: #0057FF;">
                                                            <i class="text-sm text-white">HAPUS</i>
                                                        </a>
                                                    </div>

                                                </td>
                                            </tr>
                                        </tbody>



                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="col-5">

                        </div>
                    </div>
                </form>
            </div>


            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>
