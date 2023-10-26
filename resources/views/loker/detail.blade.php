<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="lokeru"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Lowongan Kerja'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('{{ asset('foto/loker/' . $dl->foto) }}');">
                {{-- <span class="mask  bg-gradient-primary  opacity-6"></span> --}}
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-12">
                            <center>
                                <h2>{{ $dl->judul }}</h2>
                                <h2 class="mb-3">{{ $dl->instansi }}</h2>
                            </center>
                           
                        </div>

                    </div>
                </div>
                <div class="card card-plain h-100 mb-3">
                    <div class="row">

                        <div class="col col-md-2">
                            <b style="color: black">Deskription : </b>
                        </div>
                        <div class="col col-md-10">
                            <p>{{ $dl->deskripsi }}</p>
                        </div>
                        <div class="col col-md-2">
                            <b style="color: black">Persyaratan : </b>
                        </div>
                        <div class="col col-md-10">
                            <p>{{ $dl->persyaratan }}</p>
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
                        
                        <form enctype="multipart/form-data" method='POST' action='{{ route('lokeru.store', $dl->id_loker) }}'>
                            @csrf
                            <div class="row">

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control border border-2 p-2"
                                        value='{{ old('location', Auth::user()->nama) }}' @readonly(true)>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">CV</label>
                                    <input type="file" name="cv" class="form-control border border-2 p-2"
                                        value='{{ old('cv') }}'>
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
