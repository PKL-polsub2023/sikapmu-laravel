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
<section class="services service-2 ptb-100 bg-white" data-aos="fade-down">
    <div class="container" data-aos="flip-up">
        <div class="default-section-title default-section-title-middle">
            <h3 class="text-black">Wirausaha Muda Subang</h3>
        </div>
        <div class="section-content">
            <div class="row mt-5 justify-content-center">
                <div class="col-md-6">
                    <div class="card card-white-box">
                        <div class="p-2">
                            <div id="pie1"
                                style="min-width: 310px; height: 400px; max-width: 100%; margin: 0 auto"></div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-white-box">
                        <div class="p-2">
                            <h5 class="ms-3 mt-2 text-center"> Wirausaha Muda <br>@if ($j == null)
                                0
                            @else
                            {{ $j->wira_usaha_muda }}
                            @endif</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="team ptb-100 bg-f9fbfe">
    <div class="container">
        <div class="default-section-title default-section-title-middle">
            <h3>Wirausaha Muda Subang</h3>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p> -->
        </div>
        <div class="section-content">
            <div class="agenda-slider-area-1 owl-carousel">

                @foreach ($wm as $item)
                    <div class="blog-card mlr-15 mb-30">
                        <div class="box-shadow rounded team-card bg-white">
                            <div class="team-card-img p-0">
                                @if ($item->foto != null)
                                    <img src="{{ asset('foto/wiramuda/' . $item->foto) }}" alt="image"
                                        class="rounded" style="height: 240px; widht:100%">
                                @else
                                    <img src="{{ asset('foto/default.png') }}" alt="image" class="rounded"
                                        style="height: 240px; widht:100%">
                                @endif
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
                                <p>Umur {{ $item->umur }} Tahun</p>
                                <a class="btn default-button"
                                    href="{{ route('wm.landing.detail', $item->id) }}">Selengkapnya <i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @php
        $sekarang = date('Y');
    @endphp
    <input type="text" id="tahun" value="{{ $sekarang }}" hidden>
</section>

<script>
    $(document).ready(function() {
        chart();
    });

    function chart() {
        var tahun = $("#tahun").val();
        var id = parseInt(tahun);
        $.get("{{ url('chart') }}/" + id, {}, function(data, status) {
            Highcharts.chart('pie1', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: '<h2>Data Wira Usaha Muda</h2>'
                },
                tooltip: {
                    pointFormat: '{series.name}: {point.y} : {point.percentage:.1f}%'
                },
                legend: {
                    layout: 'horizontal',
                    backgroundColor: '',
                    floating: true,
                    align: 'left',
                    verticalAlign: 'bottom',
                    x: 0,
                    y: 0,
                    labelFormatter: function() {
                        return this.name + ' : ' + this.options.y + ' orang';
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            // format: '<b>{point.name}</b> : {point.y} orang',
                            // style: {
                            // color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            // }
                        },
                        showInLegend: true,

                    }
                },
                series: [{
                    name: 'Brands',
                    colorByPoint: true,
                    data: [{
                        name: 'Wira Usaha Muda',
                        y: 5,
                        sliced: true,
                        selected: true
                    }, ]
                }]
            });




        });

    }
</script>
@endsection
