<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="Tambah Data"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Tambah Data'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            
                    
                
                <div class="card card-plain h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-3">Data Usaha</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <form method='POST' action='{{ route('pemuda.store') }}'>
                            @csrf
                            <div class="row">

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Nama Usaha</label>
                                    <input type="number" name="nama_usaha" class="form-control border border-2 p-2"
                                        value='{{ old('nama_usaha', $du->nama_usaha) }}'>
                                </div>
                                
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jenis Produk</label>
                                    <input type="number" name="jenis_produk" class="form-control border border-2 p-2"
                                        value='{{ old('jenis_produk', $du->jenis_produk) }}'>
                                    @error('jenis_produk')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Modal</label>
                                    <input type="number" name="modal" class="form-control border border-2 p-2"
                                        value='{{ old('modal', $du->modal) }}'>
                                    @error('modal')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
            
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Omset</label>
                                    <input type="number" name="omset" class="form-control border border-2 p-2"
                                        value='{{ old('omset', $du->omset) }}'>
                                    @error('omset')
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
