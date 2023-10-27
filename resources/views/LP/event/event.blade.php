@extends('template_front.layout')

@section('content')
@section('title', 'Home')
<div id="carouselHome" class="carousel slide " data-bs-ride="false">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner ">
        <div class="carousel-item active">
            <img src="{{ asset('') }}front/images/slider/slider-1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block mt--4 half-black">
                <h5 class="fw-bold">SELAMAT DATANG DI SILAPEM</h5>
                <h1>Sistem Informasi Layanan Kepemudaan</h1>
                <!-- <p class="text-white">Lorem ipsum dolor sit amet consectetuer adipiscing phasellus hendrerit lorem dolor sit amet
                    magna nibh nec urna in nisi neque aliquet ve, dapibus id dolor sit amet magna aliqu amet.
                </p>
                <a class="default-button" href="/">Learn More</a> -->
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('') }}front/images/slider/slider-3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block mt--4 half-black">
                <h5 class="fw-bold">SELAMAT DATANG DI SILAPEM</h5>
                <h1>Sistem Informasi Layanan Kepemudaan</h1>
                <!--<p>Lorem ipsum dolor sit amet consectetuer adipiscing phasellus hendrerit lorem dolor sit amet
                    magna nibh nec urna in nisi neque aliquet ve, dapibus id dolor sit amet magna aliqu amet.
                </p>
                <a class="default-button" href="">Learn More</a> -->
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('') }}front/images/slider/slider-2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block mt--4 half-black">
                <h5 class="fw-bold">SELAMAT DATANG DI SILAPEM</h5>
                <h1>Sistem Informasi Layanan Kepemudaan</h1>
                <!--<p>Lorem ipsum dolor sit amet consectetuer adipiscing phasellus hendrerit lorem dolor sit amet
                    magna nibh nec urna in nisi neque aliquet ve, dapibus id dolor sit amet magna aliqu amet.
                </p>
                <a class="default-button" href="">Learn More</a> -->
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

@include('template_front.support')

<section class="berita ptb-50 bg-white" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
    data-aos-duration="1500">
    <div class="container">
        <div class="default-section-title default-section-title-middle">
            <h3>Event</h3>
        </div>
        <div class="section-content">
            <div class="row">
                @foreach ($event as $item)
                    <div class="col-4 mb-5">
                        <div class="card mt-3 px-5 py-5" style="border-radius: 10px; ">
                            <a class="nav-link text-center p-0" id="profile">
                                <div class="profile-img"
                                    style="height: 200px; display: flex; align-items: center; justify-content: center;">
                                    <center>
                                        @if ($item->foto != null)
                                            <img src="{{ asset('foto/event/' . $item->foto) }}" alt="profile-img"
                                                width="100%" />
                                        @else
                                            <img src="{{ asset('foto/default.png') }}" alt="profile-img"
                                                width="100%" />
                                        @endif
                                    </center>

                                </div>
                            </a>
                            <h1 class="text-start mx-1 mb-4 mt-5"
                                style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">
                                {{ $item->judul }}
                            </h1>
                            <h1 class="text-start mx-1 mb-2"
                                style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">
                                {{ $item->deskripsi }}
                            </h1>
                            <div class="text-start mx-1 mb-1">
                                <a class="btn text-start align-items-center"
                                    href="{{ route('event.landingPage.detail', $item->id_event) }}"
                                    style="background-color: #4C6FFF; text-align: center;">
                                    <i class="text-white" style="text-transform: none; font-style: normal;">See more <i
                                            class="fas fa-arrow-right"></i></i>
                                </a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
            <center>
                {{ $event->links() }}
            </center>
            {{-- <div class="navigations">
                    <button id="back"
                        style="position: absolute; top: 45%; right: 92%; transform: translate(-50%, -50%); border: none; background-color: #fff; border-radius: 50%; width: 40px; height: 40px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);">
                        <i class="fas fa-arrow-left" style="color: #000;"></i>
                    </button>
    
                    <button id="next"
                        style="position: absolute; top: 45%; left: 98%; transform: translate(-50%, -50%); border: none; background-color: #fff; border-radius: 50%; width: 40px; height: 40px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);">
                        <i class="fas fa-arrow-right" style="color: #000;"></i>
                    </button>
                </div> --}}
        </div>
    </div>
</section>




<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    $(document).ready(function() {
        chart();
    });

    function chart() {
        var tahun = $("#tahun").val();
        var id = parseInt(tahun);
        $.get("{{ url('chart') }}/" + id, {}, function(data, status) {
            var p1 = data[0];
            var p2 = data[1];
            Highcharts.chart('pie1', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: '<h2>Data Pemuda</h2>'
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
                        name: 'Umur 16 S/D 19 Tahun',
                        y: p1,
                        sliced: true,
                        selected: true
                    }, {
                        name: 'Umur 20 S/D 30 Tahun',
                        y: p2
                    }]
                }]
            });

            Highcharts.chart('pie2', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: '<h2>Data Pesakitan Pemuda</h2>'
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
                        name: 'Pasien TB HIV Positif',
                        y: data[3],
                        sliced: true,
                        selected: true
                    }, {
                        name: 'OAT Dengan ARV',
                        y: data[4]
                    }, ]
                }]
            });

            Highcharts.chart('pie3', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: '<h2>Data Kriminal</h2>'
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
                        name: 'Curanmor',
                        y: data[8],
                        sliced: true,
                        selected: true
                    }, {
                        name: 'Narkoba',
                        y: data[9]
                    }, {
                        name: 'Pembunuhan',
                        y: data[10]
                    }, ]
                }]
            });

            Highcharts.chart('pie4', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: '<h2>Data Data Pencari Kerja</h2>'
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
                        name: 'Pencari Kerja',
                        y: data[2],
                        sliced: true,
                        selected: true
                    }, ]
                }]
            });

            Highcharts.chart('pie5', {
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
                        y: data[5],
                        sliced: true,
                        selected: true
                    }, ]
                }]
            });

            Highcharts.chart('pie6', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: '<h2>Data Organisasi Kepemudaan</h2>'
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
                        name: 'Organisasi Kepemudaan',
                        y: data[6],
                        sliced: true,
                        selected: true
                    }, ]
                }]
            });

            Highcharts.chart('pie7', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: '<h2>Data Anggota Organisasi Kepemudaan</h2>'
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
                        name: 'Anggota Organisasi Kepemudaan',
                        y: data[7],
                        sliced: true,
                        selected: true
                    }, ]
                }]
            });

            Highcharts.chart('pie8', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: '<h2>Data OSIS Di Kab.Subang</h2>'
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
                        name: 'OSIS',
                        y: data[11],
                        sliced: true,
                        selected: true
                    }, ]
                }]
            });

            Highcharts.chart('pie9', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: '<h2>Data BEM Di Kab.Subang</h2>'
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
                        name: 'BEM',
                        y: data[12],
                        sliced: true,
                        selected: true
                    }, ]
                }]
            });

        });

    }
</script>

@endsection
