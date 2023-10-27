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
                            <img src="{{ asset('foto/pelopor/' . $user->foto) }}" alt="profile_image"
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
                        @error('password')
                        <p class='text-danger inputerror'>{{ $message }} </p>
                        @enderror
                        <form enctype="multipart/form-data" method='POST' action='{{ route('pelopor.updatebio') }}'>
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
                                    <label class="form-label">TTL</label>
                                    @php
                                        $ttl = explode(", ", $user->ttl);
                                    @endphp
                                    <div class="input-group">
                                        @if ($user->ttl<>"")
                                        <input type="text" name="t" class="form-control border border-2 p-2"
                                        value='{{ old('ttl', $ttl[0]) }}'>
                                        <input type="date" name="tl" class="form-control border border-2 p-2"
                                        value='{{ old('ttl', $ttl[1]) }}'>
                                        @else
                                        <input type="text" name="t" class="form-control border border-2 p-2"
                                        value='{{ old('ttl') }}'>
                                        <input type="date" name="tl" class="form-control border border-2 p-2"
                                        value='{{ old('ttl') }}'>
                                        @endif
                                    
                                      </div>
                                   
                                    @error('ttl')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Agama</label>
                                    <input type="text" name="agama" class="form-control border border-2 p-2"
                                        value='{{ old('agama', $user->agama) }}'>
                                    @error('agama')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Pendidikan Terakhir</label>
                                    <input type="text" name="pendidikan" class="form-control border border-2 p-2"
                                        value='{{ old('pendidikan', $user->pendidikan_akhir) }}'>
                                    @error('pendidikan')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Alamat Lengkap</label>
                                    <input type="text" name="alamat" class="form-control border border-2 p-2"
                                        value='{{ old('alamat', $user->alamat) }}'>
                                    @error('alamat')
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
                                    <label class="form-label">No Hp</label>
                                    <input type="text" name="kontak" class="form-control border border-2 p-2"
                                        value='{{ old('kontak', $user->kontak) }}'>
                                    @error('kontak')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Status Pernikahan</label>
                                   <select name="pernikahan" class="form-control border border-2 p-2">
                                    <option disabled>Status Pernikahan</option>
                                    <option @if ($user->status_nikah == "Belum Menikah")
                                        selected
                                    @endif value="Belum Menikah">Belum Menikah</option>
                                    <option  @if ($user->status_nikah == "Menikah")
                                        selected
                                    @endif value="Menikah">Menikah</option>
                                    
                                   </select>
                                    @error('pernikahan')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Data Keluarga</label>
                                    <input type="text" name="keluarga" class="form-control border border-2 p-2"
                                        value='{{ old('keluarga', $user->data_keluarga) }}'>
                                    @error('keluarga')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Foto</label>
                                    <input type="file" name="foto" class="form-control border border-2 p-2"
                                        value='{{ old('foto') }}'>
                                    @error('foto')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn bg-gradient-dark">Submit</button>
                                <a class="btn bg-gradient-dark" onclick="create()">Ubah Password</a>
                            </div>
                           
                        </form>
                        
                    </div>
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
                        <form action="{{ route('password', $user->id) }}" method="POST">
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
    <x-plugins></x-plugins>

</x-layout>

<script>
     function create() {
                $("#exampleModalLabel").html('Ubah Password');
                $("#exampleModal").modal('show');
        }

</script>


