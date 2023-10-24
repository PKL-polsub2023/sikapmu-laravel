<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="user-profile"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='User Profile'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ asset('logo/okp/' . $user->logo) }}" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{ $user->nama }}
                            </h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="true">
                                        <i class="material-icons text-lg position-relative">home</i>
                                        <span class="ms-1">App</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="false">
                                        <i class="material-icons text-lg position-relative">email</i>
                                        <span class="ms-1">Messages</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="false">
                                        <i class="material-icons text-lg position-relative">settings</i>
                                        <span class="ms-1">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card card-plain h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-3">Profile Information</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        @if (session('status'))
                            <div class="row">
                                <div class="alert alert-success alert-dismissible text-white" role="alert">
                                    <span class="text-sm">{{ Session::get('status') }}</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10"
                                        data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @endif
                        @if (Session::has('demo'))
                            <div class="row">
                                <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                    <span class="text-sm">{{ Session::get('demo') }}</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10"
                                        data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @endif
                        <form enctype="multipart/form-data" method='POST' action='{{ route('okp.updatebio') }}'>
                            @csrf
                            <div class="row">

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control border border-2 p-2"
                                        value='{{ old('location', $user->email) }}' @readonly(true)>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control border border-2 p-2"
                                        value='{{ old('nama', $user->nama) }}'>
                                    @error('nama')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Singkatan</label>
                                    <input type="text" name="singkatan" class="form-control border border-2 p-2"
                                        value='{{ old('singkatan', $user->singkatan) }}'>
                                    @error('singkatan')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Nama Jenjang</label>
                                    <input type="text" name="nama_jenjang" class="form-control border border-2 p-2"
                                        value='{{ old('nama_jenjang', $user->nama_jenjang) }}'>
                                    @error('nama_jenjang')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Kategori Organisasi Pernikahan</label>
                                   <select name="kategori_org" class="form-control border border-2 p-2">
                                    <option selected disabled>Kategori Organisasi</option>
                                    <option @if ($user->kategori_org == "Kemahasiswaan")
                                        selected
                                    @endif value="Kemahasiswaan">Kemahasiswaan</option>
                                    <option  @if ($user->kategori_org == "Kepelajaran")
                                        selected
                                    @endif value="Kepelajaran">Kepelajaran</option>
                                    <option  @if ($user->kategori_org == "Kepemudaan")
                                        selected
                                    @endif value="Kepemudaan">Kepemudaan</option>
                                   </select>
                                    @error('kategori_org')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Bentuk Organisasi</label>
                                   <select name="bentuk_org" class="form-control border border-2 p-2">
                                    <option selected disabled>Bentuk Organisasi</option>
                                    <option @if ($user->bentuk_org == "Wadah Berhimpun")
                                        selected
                                    @endif value="Wadah Berhimpun">Wadah Berhimpun</option>
                                    <option  @if ($user->bentuk_org == "Komunitas")
                                        selected
                                    @endif value="Komunitas">Komunitas</option>
                                    <option  @if ($user->bentuk_org == "Forum Komunitas")
                                        selected
                                    @endif value="Forum Komunitas">Forum Komunitas</option>
                                    <option  @if ($user->bentuk_org == "Profesi")
                                        selected
                                    @endif value="Profesi">Profesi</option>
                                    <option  @if ($user->bentuk_org == "Lembaga Sosisal/Yayasan")
                                        selected
                                    @endif value="Lembaga Sosisal/Yayasan">Lembaga Sosisal/Yayasan</option>
                                    <option  @if ($user->bentuk_org == "LSM")
                                        selected
                                    @endif value="LSM">LSM</option>
                                   </select>
                                    @error('bentuk_org')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Berhimpun Di Wadah KNPI</label>
                                   <select name="hinpun_knpi" class="form-control border border-2 p-2">
                                    <option @if ($user->hinpun_knpi == "Sudah Berhimpun")
                                        selected
                                    @endif value="Sudah Berhimpun">Sudah Berhimpun</option>
                                    <option  @if ($user->hinpun_knpi == "Belum Berhimpun")
                                        selected
                                    @endif value="Belum Berhimpun">Belum Berhimpun</option>
                                    <option  @if ($user->hinpun_knpi == "Tidak Berhimpun")
                                        selected
                                    @endif value="Tidak Berhimpun">Tidak Berhimpun</option>
                                   </select>
                                    @error('hinpun_knpi')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Alamat Jalan</label>
                                    <input type="text" name="alamat_jln" class="form-control border border-2 p-2"
                                        value='{{ old('alamat_jln', $user->alamat_jln) }}'>
                                    @error('alamat_jln')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">kota</label>
                                    <input type="text" name="kota" class="form-control border border-2 p-2"
                                        value='{{ old('kota', $user->kota) }}'>
                                    @error('kota')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">provinsi</label>
                                    <input type="text" name="provinsi" class="form-control border border-2 p-2"
                                        value='{{ old('provinsi', $user->provinsi) }}'>
                                    @error('provinsi')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Kode Pos</label>
                                    <input type="text" name="pos" class="form-control border border-2 p-2"
                                        value='{{ old('pos', $user->kode_pos) }}'>
                                    @error('pos')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">website</label>
                                    <input type="text" name="website" class="form-control border border-2 p-2"
                                        value='{{ old('website', $user->website) }}'>
                                    @error('website')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                             
                              

                                

                                {{-- <div class="mb-3 col-md-6">
                                    <label class="form-label">Pendidikan Terakhir</label>
                                    <input type="text" name="pendidikan" class="form-control border border-2 p-2"
                                        value='{{ old('pendidikan', $user->pendidikan_akhir) }}'>
                                    @error('pendidikan')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div> --}}

                                {{-- <div class="mb-3 col-md-6">
                                    <label class="form-label">Alamat Lengkap</label>
                                    <input type="text" name="alamat" class="form-control border border-2 p-2"
                                        value='{{ old('alamat', $user->alamat) }}'>
                                    @error('alamat')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div> --}}

                              
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">No Hp</label>
                                    <input type="text" name="kontak" class="form-control border border-2 p-2"
                                        value='{{ old('kontak', $user->kontak) }}'>
                                    @error('kontak')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                
                                {{-- <div class="mb-3 col-md-6">
                                    <label class="form-label">Data Keluarga</label>
                                    <input type="text" name="keluarga" class="form-control border border-2 p-2"
                                        value='{{ old('keluarga', $user->data_keluarga) }}'>
                                    @error('keluarga')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div> --}}
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Logo</label>
                                    <input type="file" name="logo" class="form-control border border-2 p-2"
                                        value='{{ old('logo') }}'>
                                    @error('logo')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                
                            </div>
                            <button type="submit" class="btn bg-gradient-dark">Submit</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
        <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>

</x-layout>
