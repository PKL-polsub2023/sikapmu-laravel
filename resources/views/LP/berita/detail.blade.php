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

<section class="blog-details ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="blog-details-text-area details-text-area">
                            <h3 class="mt-0">{{ $judul ?? '' }}</h3>
                            <div class="blog-date">
                                <ul>
                                    <li><i class="far fa-calendar-alt"></i> {{ $berita->upload }}</li>
                                    <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                                    <li><i class="far fa-folder"></i> Terkini</li>
                                </ul>
                            </div>
                            <h1>{{ $berita->judul }}</h1>
                            <img src="{{ asset('foto/berita/' . $berita->foto) }}" alt="image"
                                class="img-fluid img-responsive" style="width:100%" />
                            <div class="mt-3">
                                <?php echo $berita->isi ?? ''; ?>
                            </div>
                        </div>
                        <div class="blog-text-footer mt-30">
                            <div class="tag-area">
                                <ul>
                                    <li><i class="fas fa-tags"></i></li>
                                    <li><a href="/tag/terkini">Terkini,</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-4">
                <div class="sidebar-area pl-20 pt-30">
                    <div class="sidebar-card sidebar-category mt-30">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Terkini</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-card recent-news mt-30">
                        <h3>Popular Posts</h3>
                        @foreach ($allBerita as $data)
                            <div class="recent-news-card">
                                <a href="{{ route('berita.landingPage.detail', $data->id_berita) }}"><img
                                        src="{{ asset('foto/berita/' . $data->foto) }}" alt="image"></a>
                                <h5><a href="/berita/acara-gathering-wirausaha-muda">{{ $data->judul }}</a>
                                </h5>
                                <p>{{ $data->upload }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
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
