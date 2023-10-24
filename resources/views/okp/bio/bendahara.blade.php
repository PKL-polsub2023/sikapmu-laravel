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
            
                <div class="card card-plain h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-3">Data Bendahara Umum</h6>
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
                        <form method='POST' action='{{ route('okp.ubendahara') }}'>
                            @csrf
                            <div class="row">

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control border border-2 p-2"
                                        value='{{ old('email', $user->email) }}' >
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Nama</label>
                                    <input type="text" name="nama_bend" class="form-control border border-2 p-2"
                                        value='{{ old('nama_bend', $user->nama_bend) }}'>
                                    @error('nama_bend')
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
                                    <label class="form-label">Jenis Kelamin</label>
                                   <select name="jenkel" class="form-control border border-2 p-2">
                                    <option disabled>Jenis Kelamin</option>
                                    <option @if ($user->jenkel == "Laki-laki")
                                        selected
                                    @endif value="Laki-laki">Laki-laki</option>
                                    <option  @if ($user->jenkel == "Perempuan")
                                        selected
                                    @endif value="Perempuan">Perempuan</option>
                                    
                                   </select>
                                    @error('jenkel')
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
                                    <label class="form-label">Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control border border-2 p-2"
                                        value='{{ old('pekerjaan', $user->pekerjaan) }}'>
                                    @error('pekerjaan')
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
