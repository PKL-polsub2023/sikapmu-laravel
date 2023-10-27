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
{{-- <section class="services service-2 ptb-100 bg-white" data-aos="fade-down">
   <div class="container" data-aos="flip-up">
      <div class="default-section-title default-section-title-middle">
            <h3 class="text-black">Pemuda Pelopor Subang</h3>
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
                        <h5 class="ms-3 mt-2 text-center">Umur 16 S/D 19 Tahun <br> {{ $j->pemuda_satu }}</h5>
                     </div>
                  </div>
                  <div class="card card-white-box">
                     <div class="p-2">
                        <h5 class="ms-3 mt-2 text-center">Umur 20 S/D 30 Tahun <br> {{ $j->pemuda_dua }}</h5>
                     </div>
                  </div>
               </div>
            </div>
      </div>
   </div>
</section> --}}
<section class="team ptb-100 bg-f9fbfe">
   <div class="container">
      <div class="default-section-title default-section-title-middle">
         <h3>Pemuda Pelopor Subang</h3>
         <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p> -->
      </div>
      <div class="section-content">
         <div class="agenda-slider-area-1 owl-carousel">

            @foreach ($pelopor as $item)
            <div class="blog-card mlr-15 mb-30">
               <div class="box-shadow rounded team-card bg-white">
                  <div class="team-card-img p-0">
                     <img src="{{ asset('foto/pelopor/'.$item->foto) }}" alt="image" class="rounded" style="height: 240px; widht:100%">
                     <!-- <div class="team-social-icons">
                        <ul>
                           <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                     </div> -->
                  </div>
                  <div class="team-card-text">
                     <h4>{{ $item->nama }}</h4>
                     <p>Alamat : {{ $item->alamat }} Tahun</p>
                     <a class="btn default-button" href="{{ route('pemuda.landingPage.detail', $item->id) }}">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>

   
</section>


@endsection