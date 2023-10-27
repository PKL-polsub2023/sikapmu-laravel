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
                       

                            <div class="mb-3 col-md-6">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control border border-2 p-2"
                                    value='{{ old('location', $wirausaha->email) }}' @readonly(true)>
                            </div>

                            <div class="col-md-6"></div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label">Nama Depan</label>
                                <input type="text" name="namaDepan" class="form-control border border-2 p-2"
                                    value='{{ old('namaDepan', $namaDepan) }}'>
                                @error('namaDepan')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label">Nama Belakang</label>
                                <input type="text" name="namaBelakang" class="form-control border border-2 p-2"
                                    value='{{ old('namaBelakang', $namaBelakang) }}'>
                                @error('namaBelakang')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label">TTL</label>
                                @php
                                    $ttl = explode(", ", $wirausaha->ttl);
                                @endphp
                                <div class="input-group">
                                    @if ($wirausaha->ttl<>"")
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
                                <label class="form-label">Umur</label>
                                <input type="text" name="umur" class="form-control border border-2 p-2"
                                    value='{{ old('umur', $wirausaha->umur) }}'>
                                @error('umur')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>

                            

                            <div class="mb-3 col-md-6">
                                <label class="form-label">Alamat Lengkap</label>
                                <input type="text" name="alamat" class="form-control border border-2 p-2"
                                    value='{{ old('alamat', $wirausaha->alamat) }}'>
                                @error('alamat')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">No Hp</label>
                                <input type="text" name="kontak" class="form-control border border-2 p-2"
                                    value='{{ old('kontak', $wirausaha->kontak) }}'>
                                @error('kontak')
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
