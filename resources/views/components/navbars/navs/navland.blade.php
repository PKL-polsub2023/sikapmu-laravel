@props(['titlePage'])

<nav class="navbar navbar-main navbar-expand-lg shadow-none border-radius-xl" id="navbarBlurs" navbar-scroll="true">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbar">
            {{-- <div class="row"> --}}
            <div class="col-2">
                
                        <div class="profile-img"
                        style="width: 55px; height: 55px; display: flex; justify-content: end; margin: 0 auto;">
                        <img src="{{ asset('assets/img/icon_black.png') }}" alt="profile-img" />
                        </div>
                
            </div>
            <div class="col-1 text-end">
                <a class="fw-bold " href="/"
                    style="font-size: 15px; color: #000; font-family:Georgia, 'Times New Roman', Times, serif">Home</a>
            </div>
           
            <div class="mr-15 ml-5 col-2 ">
                <a class=" fw-bold"
                    style="font-size: 15px; color: #000; font-family:Georgia, 'Times New Roman', Times, serif"
                    href="{{ route('wm.landingpage') }}">Wirausaha
                    Muda
                </a>
            </div>
            <div class="col-1 ">
                <a class=" fw-bold" href="{{ route('pemuda.landingPage') }}"
                    style="font-size: 15px; color: #000; font-family:Georgia, 'Times New Roman', Times, serif">Pemuda
                </a>
            </div>
            <div class="col-1 text-center">
                <a class=" fw-bold" href="{{ route('okp.landingPage') }}"
                    style="font-size: 13px; color: #000; font-family:Georgia, 'Times New Roman', Times, serif"> OKP
                </a>
            </div>
            <div class="col-1 text-center">
                <a class=" fw-bold" href="{{ route('event.landingPage') }}"
                    style="font-size: 13px; color: #000; font-family:Georgia, 'Times New Roman', Times, serif">Event
                </a>
            </div>
            <div class="col-1 text-center">
                <a class=" fw-bold" href="{{ route('loker.landingPage') }}"
                    style="font-size: 13px; color: #000; font-family:Georgia, 'Times New Roman', Times, serif">Loker
                </a>
            </div>
            <div class="col-1 text-start">
                <a class=" fw-bold" href="{{ route('berita.landingPage') }}"
                    style="font-size: 13px; color: #000;font-family:Georgia, 'Times New Roman', Times, serif">Berita
                </a>
            </div>
            <div class="text-center mt-4 mx-1 mb-1">
                <a class="btn text-start align-items-center" href="{{ route('login') }}"
                    style="background-color: #4C6FFF; text-align: center;">
                    <i class="text-white" style="text-transform: none; font-style: normal;">Masuk
                    </i>
                </a>
            </div>
            <div class="col-1">
                <span class="input-group-text text-start">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </div>
    </div>
</nav>
