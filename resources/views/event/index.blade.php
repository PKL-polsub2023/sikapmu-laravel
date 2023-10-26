<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="eventu"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Event'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <h1 class="text-start mx-5 mt-3 mb-5" style="color: rgb(0, 0, 0); font-size: 22px; font-weight: bold; ">
            Event
            
        </h1>
        <div class="d-flex justify-content-end" style="margin-right:2em">
            <a class="btn btn-primary float-right" href="{{ route('eventu.histori') }}">Event Diikuti</a>
        </div>
        
       
       
        <div class="container mt-3 position: relative;">
          
                <div class="row">
            @foreach ($de as $item)
                
           
                <div class="card mx-2 mb-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('foto/event/'. $item->foto) }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">{{ $item->judul }}
                    </h1>
                    <h1 class="text-start mx-4 mb-2"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">{{ $item->kategori }}
                    </h1>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">{{ $item->deskripsi }}
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="{{ route('eventu.detail', $item->id_event) }}"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more <i
                                    class="fas fa-arrow-right"></i></i>
                        </a>
                    </div>
                </div>
                @endforeach
                </div>
          
            
        </div>
        <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>

</x-layout>
