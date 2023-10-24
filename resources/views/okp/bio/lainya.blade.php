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
                                <h6 class="mb-3">Data Lainya</h6>
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
                        <form method='POST' action='{{ route('okp.ulainya') }}'>
                            @csrf
                            <div class="row">

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Periode Kepengurusan</label>
                                   <select name="periode" class="form-control border border-2 p-2">
                                    <option selected disabled>Periode Kepengurusan</option>
                                    <option @if ($user->periode == "1")
                                        selected
                                    @endif value="1">1</option>
                                    <option  @if ($user->periode == "2")
                                        selected
                                    @endif value="2">2</option>
                                    <option  @if ($user->periode == "3")
                                        selected
                                    @endif value="3">3</option>
                                    <option  @if ($user->periode == "4")
                                        selected
                                    @endif value="4">4</option>
                                    <option  @if ($user->periode == "5")
                                        selected
                                    @endif value="5">5</option>
                                   </select>
                                    @error('periode')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>



                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Masa Periode Saat Ini</label>
                                  
                                    <div class="row">
                                      <div class="col col-md-5">
                                        <input type="date" name="mulai_pengurusan" class="form-control border border-2 p-2"
                                        value='{{ old('ttl', $user->mulai_pengurusan) }}' >
                                      </div>
                                      <div class="col col-md-2">
                                            <input type="text" value=" S/D" class="form-control text-align-center">
                                      </div>
                                      <div class="col col-md-5">
                                        <input type="date" name="akhir_pengurusan" class="form-control border border-2 p-2"
                                        value='{{ old('ttl', $user->akhir_pengurusan) }}'>
                                      </div>
                                    
                                    </div>
                                   
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
