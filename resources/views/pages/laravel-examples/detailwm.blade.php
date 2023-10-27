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
{{-- <section class="services service-2 ptb-100 bg-white" data-aos="fade-down">
   <div class="container" data-aos="flip-up">
      <div class="default-section-title default-section-title-middle">
            <h3 class="text-black">Wirausaha Muda Subang</h3>
      </div>
      <div class="section-content">
            <div class="row mt-5 justify-content-center">
               <div class="col-md-6">
                  <div class="card card-white-box">
                        <div class="p-2">
                        <div id="pie1" style="min-width: 310px; height: 400px; max-width: 100%; margin: 0 auto"></div>
                          
                        </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card card-white-box">
                     <div class="p-2">
                        <h5 class="ms-3 mt-2 text-center"> Wirausaha Muda <br> {{ $j->wira_usaha_muda }}</h5>
                     </div>
                  </div>
               </div>
            </div>
      </div>
   </div>
</section> --}}
<section class="team ptb-100 bg-f9fbfe">
    <div class="container-fluid py-4">
        <div class="col-3 text-start">
            <h1 class="d-flex text-start align-items-start"
                style="color: rgb(0, 0, 0); font-size: 24px; font-weight: bold; margin-right: 5px;">
                Bio Wirausahawan
            </h1>
        </div>
        <div class="card py-4 px-4" style="border-radius: 10px; background-color: #293679; position:relative;">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-3 mt-3">
                    <h1 class="d-flex text-center align-items-center"
                        style="color: rgb(255, 255, 255); font-size: 24px; font-weight: bold;">
                        {{ $wirausaha->nama }}
                    </h1>
                    <h1 class="d-flex text-center align-items-center"
                        style="color: rgb(255, 255, 255); font-size: 18px; font-weight: 50;">
                        {{ $wirausaha->nama_wirausaha }}
                    </h1>
                    <h1 class="d-flex text-center align-items-center"
                        style="color: rgb(255, 255, 255); font-size:18px; font-weight: 100;">{{ $wirausaha->ttl }}
                    </h1>
                </div>
                <div class="col-7">
                    
                            <div class="container" style="max-width: 500px;">
                                <h1 class="text-start mx-3 mb-4"
                                    style="color: rgb(255, 255, 255); font-size: 18px; font-weight: 100; white-space: pre-line;">
                                    Alamat : {{ $wirausaha->alamat }}
                                </h1>
                            </div>
                        

                </div>
            </div>

        </div>

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
































