@extends('template_front.layout')

@section('content')
@section('title', 'Wirausaha Muda')   
<section class="uni-banner">
   <div class="container">
      <div class="uni-banner-text-area">
         <h1>Wirausaha Muda</h1>
         <ul>
            <li><a href="/">Home</a></li>
            <li>Wirausaha Muda</li>
         </ul>
      </div>
   </div>
</section>
@include('template_front.support')

<section class="team ptb-100 bg-f9fbfe">
    <div class="container-fluid py-4">
        <div class="default-section-title default-section-title-middle">
            <h3>Wirausaha Muda Subang</h3>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p> -->
         </div>
         <div class=""></div>

        <div class="col-2 d-flex justify-content-end mt-n7">
            <a class="nav-link text-start p-0" id="profile" style="margin-left: 500px;">
                <div class="position-relative"
                    style="width: 180px; height: 180px; overflow: hidden; border-radius: 50%; border: 5px solid white;">
                    <img src="{{ asset('foto/wiramuda/' . $wirausaha->foto) }}" alt="profile-img"
                        class="img-fluid mb-n8" style="object-fit: cover; width: 100%; height: 100%;" />
                </div>
            </a>
        </div>
        @php
            $je = count($event);
            $ju = count($usaha);
        @endphp
        <div class="container">
            <div class="row mt-5">
                <div class="col-2"></div>
                <div class="col-4 text-center">
                    <div class="card text-center" style="border-radius: 10px; background-color: #293679;">
                        <h1 class="d-flex justify-content-center align-items-center"
                            style="color: rgb(255, 255, 255); font-size: 18px; font-weight: bold; height: 50px;">
                            Banyak usaha : {{ $ju }}
                        </h1>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <div class="card text-center" style="border-radius: 10px; background-color: #293679;">
                        <h1 class="d-flex justify-content-center align-items-center"
                            style="color: rgb(255, 255, 255); font-size: 18px; font-weight: bold; height: 50px;">
                            Joint Event : {{ $je }}
                        </h1>
                    </div>
                </div>

            </div>
        </div>
        <div class="card mt-3 mb-3">
            {{-- <center>
                <i class="text text-black mt-3 mb-3">Data Usaha</i>
            </center> --}}
            
            <div class="table-responsive p-0">
                <table style="width:100%" id="umum" class="display">
                    <thead>
                        <tr>
                            <th
                                class="text-uppercase text-center text-secondary text font-weight-bolder opacity-7">
                                Nama Usaha
                            </th>
                            <th
                                class="text-uppercase text-center text-secondary text font-weight-bolder opacity-7">
                                Jenis Produk</th>
                            <th
                                class="text-center text-uppercase text-secondary text font-weight-bolder opacity-7">
                                Modal</th>
                            <th
                                class="text-center text-uppercase text-secondary text font-weight-bolder opacity-7">
                                Omset</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usaha as $data)
                            <tr>
                                <td class="align-middle text-center text">
                                    <p class="text text-secondary mb-0">{{ $data->nama_usaha }}
                                    </p>
                                </td>
                                <td class="align-middle text-center">
                                    <span
                                        class="text-secondary text font-weight-bold">{{ $data->jenis_produk }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span
                                        class="text-secondary text font-weight-bold">{{ $data->modal }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span
                                        class="text-secondary text font-weight-bold">{{ $data->omset }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  
</section>


@endsection
































