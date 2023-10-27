@extends('template_front.layout')

@section('content')
@section('title', 'Home')   
    <div id="carouselHome" class="carousel slide " data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="{{ asset('') }}front/images/slider/slider-1.png" class="d-block w-100" alt="..." >
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
                <img src="{{ asset('') }}front/images/slider/slider-3.png" class="d-block w-100" alt="..." >
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
                <img src="{{ asset('') }}front/images/slider/slider-2.png" class="d-block w-100" alt="..." >
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
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselHome"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    @include('template_front.support')


    <section class="services service-2 ptb-100 bg-light" data-aos="fade-down">
        <div class="container" data-aos="flip-up">
            <div class="default-section-title default-section-title-middle">
                <h3 class="text-black">Evaluasi Data Kepemudan</h3>
            </div>
            @php
            $sekarang = date('Y');
            @endphp
            <center>
             <div class="col col-md-1 mt-3" style="height: 50px">
                <select id="tahun" class="form-control" onchange="chart()" style="text-align: center;">
                    @foreach ($dp as $item)
                        <option @if ($item->tahun == $sekarang) selected @endif value="{{ $item->tahun }}">
                            {{ $item->tahun }}</option>
                    @endforeach
                </select>
            </div>
            </center>
            <div class="section-content">
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="card card-white-box">
                            <div class="p-2">
                            <div id="pie1" style="min-width: 310px; height: 500px; max-width: 100%; margin: 0 auto"></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-white-box">
                            <div class="p-2">
                            <div id="pie2" style="min-width: 310px; height: 500px; max-width: 100%; margin: 0 auto"></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-white-box">
                            <div class="p-2">
                            <div id="pie3" style="min-width: 310px; height: 500px; max-width: 100%; margin: 0 auto"></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-white-box">
                            <div class="p-2">
                            <div id="pie4" style="min-width: 310px; height: 500px; max-width: 100%; margin: 0 auto"></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-white-box">
                            <div class="p-2">
                            <div id="pie5" style="min-width: 310px; height: 500px; max-width: 100%; margin: 0 auto"></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-white-box">
                            <div class="p-2">
                            <div id="pie6" style="min-width: 310px; height: 500px; max-width: 100%; margin: 0 auto"></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-white-box">
                            <div class="p-2">
                            <div id="pie7" style="min-width: 310px; height: 500px; max-width: 100%; margin: 0 auto"></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-white-box">
                            <div class="p-2">
                            <div id="pie8" style="min-width: 310px; height: 500px; max-width: 100%; margin: 0 auto"></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-white-box">
                            <div class="p-2">
                            <div id="pie9" style="min-width: 310px; height: 500px; max-width: 100%; margin: 0 auto"></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                   
                    <div class="card card-white-box mt-5">
                        <div class="p-2">
                            <div class="d-flex justify-content-between py-4">
                                <h3 class="ms-3 me-3 mt-2">Jadilah Jawara Muda Subang</h3>
                                <h3 class="mt-2">|</h3>
                                <h3 class="ms-3 me-3 mt-2">Jumlah Jawara Muda Subang : 3000 Terdaftar </h3>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="berita ptb-50 bg-white" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h3>Lowongan Kerja</h3>
                <p>Loker Terbaru</p>
            </div>
            <div class="section-content">
                <div class="agenda-slider-area-1 owl-carousel">
                    @foreach ($loker as $data)
                    <div class="blog-card mlr-15 mb-30">
                        <div class="blog-card-img">
                            <a href="{{ route('loker.landingPage.detail', $data->id_loker) }}"><img src="{{ asset('foto/loker/' . $data->foto) }}" alt="image"></a>
                        </div>
                        <div class="blog-card-text-area">
                            <div class="blog-date">
                                <ul>
                                <li><i class="far fa-calendar-alt"></i> {{ $data->waktu_mulai }}</li>
                                <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                                <!-- <li><i class="far fa-folder"></i> Terkini</li> -->
                                </ul>
                            </div>
                            <h4><a href="{{ route('loker.landingPage.detail', $data->id_loker) }}">{{ $data->instansi }}</a></h4>
                            <h5><a href="{{ route('loker.landingPage.detail', $data->id_loker) }}">Pekerjaan : {{ $data->judul }}</a></h5>
                            <p>{{ $data->deskripsi }}</p>
                            <a class="read-more-btn" href="{{ route('loker.landingPage.detail', $data->id_loker) }}">Read More</a>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="blog-card mlr-15 mb-30">
                        <div class="blog-card-img">
                            <a href="/loker/perusahaan-dua"><img src="{{ asset('') }}front/images/loker/job.jpg" alt="image"></a>
                        </div>
                        <div class="blog-card-text-area">
                            <div class="blog-date">
                                <ul>
                                <li><i class="far fa-calendar-alt"></i> 25/10/2023</li>
                                <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                                <!-- <li><i class="far fa-folder"></i> Terkini</li> -->
                                </ul>
                            </div>
                            <h4><a href="/loker/perusahaan-dua">PERUSAHAAN DUA</a></h4>
                            <p>Lowongan Kerja Terbaru dari Perusahaan Yang Bekerjasama dengan Dinas Kebudayaan Pariwisata Pemuda Dan Olah Raga Kabupaten Subang.</p>
                            <a class="read-more-btn" href="/loker/perusahaan-dua">Read More</a>
                        </div>
                    </div> --}}
                    
                </div>
               
            </div>
        </div>
    </section>

    <section class="berita ptb-50 bg-img-one" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h3>Event</h3>
                <p>Event Terbaru</p>
            </div>
            <div class="section-content">
                <div class="agenda-slider-area-1 owl-carousel">

                    @foreach ($event as $data)
                    <div class="blog-card mlr-15 mb-30">
                        <div class="blog-card-img">
                            <a href="/event/seleksi-wirausaha-muda-2023"><img src="{{ asset('foto/event/' . $data->foto) }}" alt="image"></a>
                        </div>
                        <div class="blog-card-text-area">
                            <div class="blog-date">
                                <ul>
                                <li><i class="far fa-calendar-alt"></i> {{ $data->waktu_event }}</li>
                                <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                                <li><i class="far fa-folder"></i> Terkini</li>
                                </ul>
                            </div>
                            <h4><a href="/event/seleksi-wirausaha-muda-2023">{{ $data->judul }}</a></h4>
                            <p>{{ $data->deskripsi }}</p>
                            <a class="read-more-btn" href="/event/seleksi-wirausaha-muda-2023">Read More</a>
                        </div>
                    </div>
                    @endforeach
                {{-- <div class="blog-card mlr-15 mb-30">
                    <div class="blog-card-img">
                        <a href="/event/seleksi-pemuda-pelopor-2023"><img src="{{ asset('') }}front/images/events/event1.jpg" alt="image"></a>
                    </div>
                    <div class="blog-card-text-area">
                        <div class="blog-date">
                            <ul>
                            <li><i class="far fa-calendar-alt"></i> 25/10/2023</li>
                            <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                            <li><i class="far fa-folder"></i> Terkini</li>
                            </ul>
                        </div>
                        <h4><a href="/event/seleksi-pemuda-pelopor-2023">SELEKSI PEMUDA PELOPOR 2023</a></h4>
                        <p>Dinas Kebudayaan Pariwisata Pemuda Dan Olah Raga Kabupaten Subang.</p>
                        <a class="read-more-btn" href="/event/seleksi-pemuda-pelopor-2023">Read More</a>
                    </div>
                </div> --}}
                   
                </div>
            </div>
        </div>
    </section>

    <section class="berita ptb-50 bg-white" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h3>Berita</h3>
                <p>Berita Terbaru</p>
            </div>
            <div class="section-content">
                <div class="agenda-slider-area-1 owl-carousel">

                    @foreach ($berita as $data)
                    <div class="blog-card mlr-15 mb-30">
                        <div class="blog-card-img">
                            <a href="{{ route('berita.landingPage.detail', $data->id_berita) }}"><img src="{{ asset('foto/berita/' . $data->foto) }}" alt="image"></a>
                        </div>
                        <div class="blog-card-text-area">
                            <div class="blog-date">
                                <ul>
                                {{-- <li><i class="far fa-calendar-alt"></i> 25/10/2023</li> --}}
                                <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                                <li><i class="far fa-folder"></i> Terkini</li>
                                </ul>
                            </div>
                            <h4><a href="{{ route('berita.landingPage.detail', $data->id_berita) }}">{{ $data->judul }}</a></h4>
                            <h5><a href="{{ route('berita.landingPage.detail', $data->id_berita) }}">Kategori : {{ $data->kategori }}</a></h5>
                            <p>{{ $data->isi }}</p>
                            <a class="read-more-btn" href="{{ route('berita.landingPage.detail', $data->id_berita) }}">Read More</a>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="blog-card mlr-15 mb-30">
                        <div class="blog-card-img">
                            <a href="/berita/pelaksanaan-gather-okp-2023"><img src="{{ asset('') }}front/images/berita/berita.jpg" alt="image"></a>
                        </div>
                        <div class="blog-card-text-area">
                            <div class="blog-date">
                                <ul>
                                <li><i class="far fa-calendar-alt"></i> 25/10/2023</li>
                                <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                                <li><i class="far fa-folder"></i> Terkini</li>
                                </ul>
                            </div>
                            <h4><a href="/berita/pelaksanaan-gather-okp-2023">PELAKSANAAN GATHER OKP 2023</a></h4>
                            <p>Dinas Kebudayaan Pariwisata Pemuda Dan Olah Raga Kabupaten Subang.</p>
                            <a class="read-more-btn" href="/berita/pelaksanaan-gather-okp-2023">Read More</a>
                        </div>
                    </div> --}}
                   
                </div>
            </div>
        </div>
    </section>

    


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
                labelFormatter: function () {
                    return this.name + ' : '+this.options.y+' orang';
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
                labelFormatter: function () {
                    return this.name + ' : '+this.options.y+' orang';
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
                },]
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
                labelFormatter: function () {
                    return this.name + ' : '+this.options.y+' orang';
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
                },{
                    name: 'Pembunuhan',
                    y: data[10]
                },]
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
                labelFormatter: function () {
                    return this.name + ' : '+this.options.y+' orang';
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
                },]
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
                labelFormatter: function () {
                    return this.name + ' : '+this.options.y+' orang';
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
                },]
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
                labelFormatter: function () {
                    return this.name + ' : '+this.options.y+' orang';
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
                },]
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
                labelFormatter: function () {
                    return this.name + ' : '+this.options.y+' orang';
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
                },]
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
                labelFormatter: function () {
                    return this.name + ' : '+this.options.y+' orang';
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
                },]
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
                labelFormatter: function () {
                    return this.name + ' : '+this.options.y+' orang';
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
                },]
            }]
        });

        });

}
</script>
 
@endsection