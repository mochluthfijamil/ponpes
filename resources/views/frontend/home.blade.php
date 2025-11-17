@extends('frontend.layouts.main')

@section('content')

<style>
    body {
        background: #e6f4f1;
        font-family: "Poppins", sans-serif;
    }
    .no-gap { --bs-gutter-x: 0 !important; }

    /* RUNNING TEXT */
    .running-wrapper {
        width: 100%;
        background: #146c43;
        color: white;
        padding: 6px 0;
        border-bottom: 4px solid #3dbb82;
        margin: 0;
    }
    .running-wrapper marquee {
        font-size: 18px;
        font-weight: 600;
        padding: 0;
        margin: 0;
    }

    /* SLIDER */
    .slider-wrapper {
        width: 100%;
        height: 460px;
        overflow: hidden;
        border-bottom: 4px solid #3dbb82;
        border-radius: 10px;
    }
    .slider-img {
        width: 100%;
        height: 460px;
        object-fit: cover;
    }

    /* SIDE PENGASUH */
    .side-box {
        background: #ffffff;
        padding: 20px;
        border-radius: 16px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        border: 3px solid #2e7d32;
        margin-top: 8px;
    }
    .side-title {
        font-weight: 700;
        font-size: 20px;
        color: #145a32;
        margin-bottom: 12px;
    }
    .side-img {
        width: 100%;
        height: 280px;
        object-fit: cover;
        border-radius: 12px;
        margin-bottom: 12px;
    }

    /* CARD UMUM */
    .card-custom {
        border-radius: 16px;
        background: #ffffff;
        padding: 22px;
        border: 2px solid #3dbb82;
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card-custom:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    }

    /* GALERI */
    .gallery-img {
        width: 100%;
        height: 240px;
        object-fit: cover;
        border-radius: 14px;
        border: 3px solid #3dbb82;
        transition: transform 0.3s ease;
    }
    .gallery-img:hover {
        transform: scale(1.05);
    }

    h3.sec-title, h2.sec-title {
        color: #145a32;
        font-weight: 700;
        border-left: 6px solid #3dbb82;
        padding-left: 12px;
    }

    /* KONTAK */
    .kontak-card {
        background: linear-gradient(135deg, #ffffff, #d0f0e4);
        border: 3px solid #3dbb82;
        border-radius: 16px;
        padding: 25px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.12);
    }
    .kontak-text {
        text-align: left;
        font-size: 16px;
        color: #145a32;
        line-height: 1.6;
    }
    .maps-logo iframe {
        border-radius: 14px;
        border: 2px solid #3dbb82;
        width: 100%;
        height: 250px;
    }
    .kontak-logo {
        display: block;
        margin: 0 auto 15px auto;
        max-width: 140px;
    }

    @media(max-width:768px){
        .slider-img { height: 260px; }
        .side-img { height: 220px; }
        .maps-logo iframe { height: 200px; margin-top: 15px; }
        .kontak-logo { max-width: 120px; }
        .kontak-text { text-align: center; }
    }
</style>

<!-- RUNNING TEXT -->
<div class="running-wrapper">
    <marquee scrollamount="6">
        ✨ Dawuh Guruku KH. Ahmad Muzammil: "Ilmu iku amaliyah, adab iku cahyané..." ✨
    </marquee>
</div>

<!-- SLIDER + PENGASUH -->
<div class="container-fluid px-0 mt-3">
    <div class="row no-gap">
        <div class="col-md-9 px-2">
            <div class="slider-wrapper shadow">
                <div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/frontend/img/pp.jpeg') }}" class="slider-img">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/frontend/img/ll.jpeg') }}" class="slider-img">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/frontend/img/oo.jpeg') }}" class="slider-img">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-3 px-2">
    <div class="side-box text-center">
        <div class="side-title">Pengasuh</div>
        <img src="{{ asset('assets/frontend/img/KK.webp') }}" class="side-img">
        <p class="text-muted mb-0"><strong>KH. Ahmad Muzammil</strong></p>
        <p class="text-muted">Pendiri I</p>
    </div>
</div>


<!-- PENGUMUMAN & BERITA -->
<div class="container-fluid px-2 mt-5">
    <div class="row g-4">
        <div class="col-md-6">
            <h3 class="sec-title">Pengumuman</h3>
            <div class="card-custom">
                <p class="text-muted mb-0">Belum ada pengumuman.</p>
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="sec-title">Berita Terbaru</h3>
            <div class="card-custom">
                <p class="text-muted mb-0">Belum ada berita.</p>
            </div>
        </div>
    </div>
</div>

<!-- PENDIDIKAN & GALERI -->
<div class="container-fluid px-2 mt-5">
    <div class="row g-4">
        <div class="col-md-6">
            <h2 class="sec-title text-center mb-4">Pendidikan</h2>
            @php
                $pendidikan = [
                    ['title' => "KBIT AR-RAHMAH", 'desc' => 'Kelompok Bermain', 'url' => url('/pendidikan/kbit')],
                    ['title' => "TKIT AR-RAHMAH", 'desc' => 'Taman Kanak-Kanak', 'url' => url('/pendidikan/tkit')],
                    ['title' => "SDIT AR-RAHMAH", 'desc' => 'Sekolah Dasar', 'url' => url('/pendidikan/sdit')],
                    ['title' => "SMPIT AR-RAHMAH", 'desc' => 'Sekolah Menengah Pertama', 'url' => url('/pendidikan/smpit')],
                    ['title' => "SMAIT AR-RAHMAH", 'desc' => 'Sekolah Menengah Atas', 'url' => url('/pendidikan/smait')]
                ];
            @endphp
            @foreach ($pendidikan as $p)
                <div class="card-custom text-center mb-3">
                    <h5 class="fw-bold">{{ $p['title'] }}</h5>
                    <p class="text-muted">{{ $p['desc'] }}</p>
                    <a href="{{ $p['url'] }}" class="btn btn-success btn-sm mt-2 btn-hover">Lihat Detail</a>
                </div>
            @endforeach
        </div>

        <div class="col-md-6">
            <h2 class="sec-title text-center mb-4">Galeri Pesantren</h2>
            @if(isset($galeri) && $galeri->count() > 0)
                <div class="row g-3">
                    @foreach ($galeri as $g)
                        @if(isset($g->gambar))
                        <div class="col-md-6">
                            <img src="{{ asset('storage/galeri/' . $g->gambar) }}" class="gallery-img shadow">
                        </div>
                        @endif
                    @endforeach
                </div>
            @else
                <p class="text-center text-muted">Belum ada foto galeri.</p>
            @endif
        </div>
    </div>
</div>

<!-- KONTAK RAPIH -->
<div class="container-fluid px-2 my-5">
    <h2 class="sec-title text-center mb-4">Kontak</h2>
    <div class="kontak-card mx-auto">
        <div class="row align-items-start">
            <!-- Logo -->
            <div class="col-12 text-center mb-3">
                <img src="{{ asset('assets/frontend/img/logo.png') }}" class="kontak-logo" alt="Logo Yayasan">
            </div>
            <!-- Alamat & kontak -->
            <div class="col-md-6 mb-3 mb-md-0">
                <p class="kontak-text">
                    <strong>Alamat:</strong> Jl. Parangtritis Km 22, Tegalsari, Donotirto, Kec. Kretek, Kab. Bantul, Yogyakarta<br>
                    <strong>Website:</strong> <a href="https://cyberdakwah.com" target="_blank">cyberdakwah.com</a><br>
                    <strong>Telepon:</strong> (0274) 690 4827<br>
                    <strong>Nomor HP (Cyber Dakwah):</strong> 0878‑3818‑7964<br>
                    <strong>Email Yayasan:</strong> <a href="mailto:rohmatulumam97@gmail.com">rohmatulumam97@gmail.com</a>
                </p>
            </div>
            <!-- Maps -->
            <div class="col-md-6">
                <div class="maps-logo">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.3077432491965!2d110.45739821533108!3d-7.913118794220054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1d4f8038b567%3A0x3c6e6c021529f6bc!2sPondok%20Pesantren%20Rohmatul%20Ummah!5e0!3m2!1sen!2sid!4v1697623456789!5m2!1sen!2sid" 
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- RUNNING TEXT BAWAH -->
<div class="running-wrapper mt-3">
    <marquee scrollamount="6">
        ✨ Ayo Mondok! ✨
    </marquee>
</div>

@endsection
