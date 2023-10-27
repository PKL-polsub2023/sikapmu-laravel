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
							<a href="/" class="nav-link @if(request()->segment(1)=='' || request()->segment(1)=='home') active @endif">Home</a>
						</li>
						<li class="nav-item ">
							<a href="/wirausaha_muda" class="nav-link @if(request()->segment(1)=='wirausaha_muda') active @endif">Wirausaha Muda</a>
						</li>
						<li class="nav-item ">
							<a href="/pemuda_pelopor" class="nav-link @if(request()->segment(1)=='pemuda_pelopor') active @endif">Pemuda Pelopor</a>
						</li>
						<li class="nav-item ">
							<a href="/pemuda_okp" class="nav-link @if(request()->segment(1)=='pemuda_okp') active @endif">Pemuda OKP</a>
						</li>
						<li class="nav-item ">
							<a href="/event" class="nav-link @if(request()->segment(1)=='event') active @endif">Event</a>
						</li>
						<li class="nav-item ">
							<a href="/loker" class="nav-link @if(request()->segment(1)=='loker') active @endif">Loker</a>
						</li>
						<li class="nav-item ">
							<a href="/berita" class="nav-link @if(request()->segment(1)=='berita') active @endif">Berita</a>
						</li>
						<!-- <li class="nav-item ">
							<a href="#" class="nav-link dropdown-toggle">Tentang</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a href="tentang-kami.html" class="nav-link">Tentang Kami</a></li>
								<li class="nav-item"><a href="" class="nav-link">Penghargaan & Publikasi</a></li>
								<li class="nav-item"><a href="testimonial.html" class="nav-link">Testimonial</a></li>
							</ul>
						</li> -->
					</ul>
					<div class="menu-sidebar">
						<ul>
							<li><button class="popup-button"><i class="fas fa-search"></i></button></li>
							<li><a class="default-button" href="/daftar">Daftar</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>