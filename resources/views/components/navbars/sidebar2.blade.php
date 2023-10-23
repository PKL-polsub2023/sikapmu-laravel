@props(['activePage'])
<style>
    .sidenav {
        background-color: #293679;
        border-top: 1px solid #293679;
        border-left: 1px solid #293679;
        border-bottom: 0;
    }

    .custom-bg {
        background-color: #293679 !important;
        border-bottom: 0;
    }

    .active-page {
        background-color: #4256D0 !important;
        color: #000000 !important;
        /* Set text color to black */
    }

    .nav-link:not(.active-page) {
        color: #ffffff !important;
    }

    .nav-link:not(.active-page) .material-icons {
        color: #ffffff !important;
        margin-left: 0 !important;
    }

    /* CSS for active card with a green background and white icon */
    .bg-4FD1C5 {
        background-color: #4FD1C5;
        border-bottom: 0;
    }

    .text-white {
        color: #ffffff;
        border-bottom: 0;
    }

    /* CSS for non-active card with a white background and green icon */
    .bg-white {
        background-color: #ffffff;
        border-bottom: 0;
    }

    .text-4FD1C5 {
        color: #4FD1C5;
        border-bottom: 0;
    }

    .card {
        /* Add any additional card styling here */
        /* For example, border, padding, and margin */
        border: 1px solid #ccc;
        padding: 8px;


        /* You can customize this as per your project's design */
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0-beta1/css/all.min.css">

<aside class="sidenav navbar navbar-vertical navbar-expand-xs fixed-start custom-bg" id="sidenav-main">
    <div class="sidenav-header">
        <a href="{{ route('dashboard') }}" class="nav-link" id="dashboard">
            <div class="profile-img" style=" height: 60px; display: flex; justify-content: center; margin: 0 auto;">
                <img src="{{ asset('assets/logo.png') }}" alt="profile-img" />
            </div>
        </a>
    </div>
    @if (Auth::check() && Auth::user()->role == 'OKP')
        <hr class="horizontal light mt-0 ">
        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Profile Kepemudaan</h6>
        </li>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'index2' ? ' active-page' : '' }} "
                    href="{{ route('index2') }}">
                    <span class="nav-link-text ms-1">Bio OKP</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'updateorgan' ? ' active-page' : '' }} "
                    href="{{ route('updateorgan') }}">

                    <span class="nav-link-text ms-1">Update organisasi</span>
                </a>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'dataketua' ? ' active-page' : '' }} "
                    href="{{ route('dataketua') }}">

                    <span class="nav-link-text ms-1">Data Ketua Umum</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'datasekretaris' ? ' active-page' : '' }} "
                    href="{{ route('datasekretaris') }}">

                    <span class="nav-link-text ms-1">Data Sekretaris Umum</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'databendahara' ? ' active-page' : '' }} "
                    href="{{ route('databendahara') }}">

                    <span class="nav-link-text ms-1">Data Bendahara Umum</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'datalain' ? 'active-page' : '' }} "
                    href="{{ route('datalain') }}">

                    <span class="nav-link-text ms-1">Data Lainnya</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'datapendukung' ? ' active-page' : '' }} "
                    href="{{ route('datapendukung') }}">

                    <span class="nav-link-text ms-1">Data Pendukung</span>
                </a>
            </li>

        </ul>
    @endif

    @if (Auth::check() && Auth::user()->role == 'Pemuda Pelopor')
        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Profile Pemuda Pelopor
            </h6>
        </li>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'biopemuda' ? ' active-page' : '' }} "
                    href="{{ route('biopemuda') }}">
                    <span class="nav-link-text ms-1">Bio Pemuda Pelopor</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'updatebiop' ? ' active-page' : '' }} "
                    href="{{ route('updatebiop') }}">

                    <span class="nav-link-text ms-1">Update Bio</span>
                </a>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'datapendukungp' ? ' active-page' : '' }} "
                    href="{{ route('datapendukungp') }}">

                    <span class="nav-link-text ms-1">Data Pendukung</span>
                </a>
            </li>

            <hr style="border-top: 2px solid #ffffff;">

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'loker' ? ' active-page' : '' }}  "
                    href="{{ route('loker') }}">

                    <span class="nav-link-text ms-1">Loker</span>
                </a>
            </li>

        </ul>
    @endif
    @if (Auth::check() && Auth::user()->role == 'User Umum')
        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Profile User</h6>
        </li>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'biousers' ? ' active-page' : '' }} "
                    href="{{ route('biouser') }}">
                    <span class="nav-link-text ms-1">Bio User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'updatebiou' ? ' active-page' : '' }} "
                    href="{{ route('updatebiou') }}">

                    <span class="nav-link-text ms-1">Update Bio</span>
                </a>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'datapendukungu' ? ' active-page' : '' }} "
                    href="{{ route('datapendukungu') }}">

                    <span class="nav-link-text ms-1">Data Pendukung</span>
                </a>
            </li>
        </ul>
    @endif

    @if (Auth::check() && Auth::user()->role == 'Wirausaha Muda')
        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Profile Wirausaha</h6>
        </li>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'biouserw' ? ' active-page' : '' }} "
                    href="{{ route('biouserw') }}">
                    <span class="nav-link-text ms-1">Bio User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'updatebio' ? ' active-page' : '' }} "
                    href="{{ route('updatebio') }}">

                    <span class="nav-link-text ms-1">Update Bio</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'datausaha' ? ' active-page' : '' }} "
                    href="{{ route('datausaha') }}">

                    <span class="nav-link-text ms-1">Data Usaha</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'datapendukungw' ? ' active-page' : '' }} "
                    href="{{ route('datapendukungw') }}">

                    <span class="nav-link-text ms-1">Data Pendukung</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'event' ? ' active-page' : '' }}  "
                    href="{{ route('event') }}">

                    <span class="nav-link-text ms-1">Event</span>
                </a>
            </li>


        </ul>
    @endif
    <ul class="navbar-nav">

        <form method="POST" action="{{ route('logout') }}" class="d-none" id="logout-form">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        </form>

        <li class="nav-item">
            <a class="nav-link text-white {{ $activePage == 'dashboard2' ? ' active-page' : '' }}"
                href="javascript:void(0)"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="nav-link-text ms-1">Logout</span>
            </a>
        </li>
    </ul>


    <div class="row align-items-end" style="height: 150px;"> <!-- Sesuaikan tinggi dengan kebutuhan Anda -->
        <div class="col-4">
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a  class="nav-link text-body p-0" id="profile">
                        <div class="profile-img" style="width: 50px; height: 50px; overflow: hidden; border-radius: 50%;">
                            <img src="{{ asset('assets/img/orang2.jpg') }}"
                                alt="profile-img" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;" />
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-5 text-start ">
            <h1 class="justify-content-start align-items-start ml-0"
                style="color: rgb(255, 255, 255); font-size: 14px; font-weight: bold;">
                Andi Pratama
            </h1>
            <h1 class="d-flex justify-content-center align-items-center ml-0"
                style="color: rgb(255, 255, 255); font-size: 14px; font-weight: 100; ">
                andipramata.comt
            </h1>
        </div>
    </div>





</aside>
