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
                                <h6 class="mb-3">Data Pemuda</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <form method='POST' action='{{ route('pemuda.store') }}'>
                            @csrf
                            <div class="row">

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">tahun</label>
                                    <input type="number" name="tahun" class="form-control border border-2 p-2"
                                        value='{{ old('tahun') }}'>
                                </div>
                                <div class="col-md-6"></div>
                                <div class="col-md-12">
                                    <label class="form-label">Jumlah Pemuda</label>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Usia 16-19 Tahun</label>
                                    <input type="number" name="pemuda_satu" class="form-control border border-2 p-2"
                                        value='{{ old('pemuda_satu') }}'>
                                    @error('pemuda_satu')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Usia 20-30 Tahun</label>
                                    <input type="number" name="pemuda_dua" class="form-control border border-2 p-2"
                                        value='{{ old('pemuda_dua') }}'>
                                    @error('pemuda_dua')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Jumlah Pesakitan Pemuda</label>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Pasien TB HIV Positif</label>
                                    <input type="number" name="pas_hiv" class="form-control border border-2 p-2"
                                        value='{{ old('pas_hiv') }}'>
                                    @error('pas_hiv')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Oat Dengan ARV</label>
                                    <input type="number" name="oat_hiv" class="form-control border border-2 p-2"
                                        value='{{ old('oat_hiv') }}'>
                                    @error('oat_hiv')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jumlah Pencari Kerja</label>
                                    <input type="number" name="penc_kerja" class="form-control border border-2 p-2"
                                        value='{{ old('penc_kerja') }}'>
                                    @error('penc_kerja')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jumlah Wira Usaha Muda</label>
                                    <input type="number" name="wira_usaha_muda" class="form-control border border-2 p-2"
                                        value='{{ old('wira_usaha_muda') }}'>
                                    @error('wira_usaha_muda')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jumlah OKP</label>
                                    <input type="number" name="jumlah_okp" class="form-control border border-2 p-2"
                                        value='{{ old('jumlah_okp') }}'>
                                    @error('jumlah_okp')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jumlah Anggota OKP</label>
                                    <input type="number" name="angota_okp" class="form-control border border-2 p-2"
                                        value='{{ old('angota_okp') }}'>
                                    @error('angota_okp')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">Data Kriminal</label>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Curanmor</label>
                                    <input type="number" name="curanmor" class="form-control border border-2 p-2"
                                        value='{{ old('curanmor') }}'>
                                    @error('curanmor')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Narkoba</label>
                                    <input type="number" name="narkoba" class="form-control border border-2 p-2"
                                        value='{{ old('narkoba') }}'>
                                    @error('narkoba')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Pembunuhan</label>
                                    <input type="number" name="pembunuhan" class="form-control border border-2 p-2"
                                        value='{{ old('pembunuhan') }}'>
                                    @error('pembunuhan')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                               

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jumlah OSIS</label>
                                    <input type="number" name="osis" class="form-control border border-2 p-2"
                                        value='{{ old('osis') }}'>
                                    @error('osis')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jumlah BEM</label>
                                    <input type="number" name="bem" class="form-control border border-2 p-2"
                                        value='{{ old('bem') }}'>
                                    @error('bem')
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
