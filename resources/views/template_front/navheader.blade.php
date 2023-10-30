<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container-fluid plr-100">
            <div class="mobile-nav">
                <a href="/" class="logo"><img src="{{ asset('') }}front/images/logo.png" alt="logo" /></a>
                <ul class="menu-sidebar menu-small-device">
                    <li><button class="popup-button"><i class="fas fa-search"></i></button></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-nav plr-100">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('') }}front/images/logo.png" alt="logo" class="logo" />
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a href="/" class="nav-link @if (request()->segment(1) == '' || request()->segment(1) == 'home') active @endif">Home</a>
                        </li>
                         <li class="nav-item ">
                            <a href="{{ url('profil') }}"
                                class="nav-link @if (request()->segment(1) == 'profil') active @endif">Profil</a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ url('lwm') }}"
                                class="nav-link @if (request()->segment(1) == 'lwm') active @endif">Wirausaha
                                Muda</a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ url('pemuda-utama') }}"
                                class="nav-link @if (request()->segment(1) == 'pemuda-utama') active @endif">Pemuda
                                Pelopor</a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ url('okp-utama') }}"
                                class="nav-link @if (request()->segment(1) == 'okp-utama') active @endif">OKP</a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ url('event-utama') }}"
                                class="nav-link @if (request()->segment(1) == 'event-utama') active @endif">Event</a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ url('loker-utama') }}"
                                class="nav-link @if (request()->segment(1) == 'loker-utama') active @endif">Loker</a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ url('berita-utama') }}"
                                class="nav-link @if (request()->segment(1) == 'berita-utama') active @endif">Berita</a>
                        </li>
                        <li><a class="default-button" href="{{ route('login') }}">Masuk</a></li>
                        <!-- <li class="nav-item ">
       <a href="#" class="nav-link dropdown-toggle">Tentang</a>
       <ul class="dropdown-menu">
        <li class="nav-item"><a href="tentang-kami.html" class="nav-link">Tentang Kami</a></li>
        <li class="nav-item"><a href="" class="nav-link">Penghargaan & Publikasi</a></li>
        <li class="nav-item"><a href="testimonial.html" class="nav-link">Testimonial</a></li>
       </ul>
      </li> -->
                    </ul>
                    {{-- <div class="menu-sidebar">
                        <ul>
                            <li><button class="popup-button"><i class="fas fa-search"></i></button></li>
                            <li><a class="default-button" href="{{ route('login') }}">Masuk</a></li>
                        </ul>
                    </div> --}}
                </div>
            </nav>
        </div>
    </div>
</div>
