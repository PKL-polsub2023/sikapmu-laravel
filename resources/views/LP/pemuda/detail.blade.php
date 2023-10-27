@extends('template_front.layout')

@section('content')
@section('title', 'Pemuda Pelopor')   
<section class="uni-banner">
   <div class="container">
      <div class="uni-banner-text-area">
         <h1>Pemuda Pelopor</h1>
         <ul>
            <li><a href="/">Home</a></li>
            <li>Pemuda Pelopor</li>
         </ul>
      </div>
   </div>
</section>
@include('template_front.support')

<section class="team ptb-100 bg-f9fbfe">
    <div class="container-fluid py-4">
        <div class="default-section-title default-section-title-middle">
            <h3>Pemuda Pelopor Subang</h3>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p> -->
         </div>
         <div class="row mt-3">
            <div class="col col-12 col-md-6">
                <div class="row">
                    <div class="col col-2"></div>
                    <div class="col col-8">
                        <div class="blog-card-img">
                            <a href="#"><img src="{{ asset('foto/wiramuda/' . $wirausaha->foto) }}" alt="image"></a>
                        </div>
                        <div class="card">
                            <center><h4 class="mt-2">{{ $wirausaha->nama }}</h4></center>
                            <div class="row">
                                <div class="col col-1"></div>
                                <div class="col col-10">
                                    <p>Kontak : {{ $wirausaha->kontak }}</p>
                                    <p>E-mail : {{ $wirausaha->email }}</p>
                                    <p>Alamat : {{ $wirausaha->alamat }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                



                @php
                $je = count($event);
                $ju = count($usaha);
            @endphp
            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col col-1 col-md-2"></div>
                    <div class="col col-5 col-md-4 text-center">
                        <div class="card text-center" style="border-radius: 10px; background-color: #293679;">
                            <h1 class="d-flex justify-content-center align-items-center"
                                style="color: rgb(255, 255, 255); font-size: 18px; font-weight: bold; height: 50px;">
                                Banyak usaha : {{ $ju }}
                            </h1>
                        </div>
                    </div>
                    <div class="col col-5 col-md-4 text-center">
                        <div class="card text-center" style="border-radius: 10px; background-color: #293679;">
                            <h1 class="d-flex justify-content-center align-items-center"
                                style="color: rgb(255, 255, 255); font-size: 18px; font-weight: bold; height: 50px;">
                                Joint Event : {{ $je }}
                            </h1>
                        </div>
                    </div>
    
                </div>
            </div>
            </div>
            <div class="col col-12 col-md-6">
                <div class="card">
                    <div class="table-responsive mt-2 ml-1">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Nama Usaha</th>
                              <th>Jenis Produk</th>
                              <th>Modal</th>
                              <th>Omset</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($usaha as $data)
                            <tr>
                              <td>{{ $data->nama_usaha }}</td>
                              <td>{{ $data->jenis_produk }}</td>
                              <td>{{ $data->modal }}</td>
                              <td>{{ $data->omset }}</td>
                            </tr>
                            @endforeach
                            <!-- Tambahkan baris data lain di sini -->
                          </tbody>
                        </table>
                      </div>
                      
                    {{-- <div class="row mt-2 text-center">
                        <div class="col col-3"><h6>Nama Usaha</h6></div>
                        <div class="col col-3"><h6>Jenis Produk</h6></div>
                        <div class="col col-3"><h6>Modal</h6></div>
                        <div class="col col-3"><h6>Omset</h6></div>

                        @foreach ($usaha as $data)
                        <div class="col col-3"><p>{{ $data->nama_usaha }}</p></div>
                        <div class="col col-3"><p>{{ $data->jenis_produk }}</p></div>
                        <div class="col col-3"><p>{{ $data->modal }}</p></div>
                        <div class="col col-3"><p>{{ $data->omset }}</p></div>
                        @endforeach
                    </div> --}}
                </div>
            </div>
         </div>
    </div>
  
</section>


@endsection
































