@extends('frontend.layouts.main')

@section('content')

<!-- RUNNING TEXT -->
<style>
    .running-wrapper {
        width: 100%;
        background: #146c43; /* hijau gelap */
        color: white; /* teks putih */
        padding: 8px 0;
        border-bottom: 4px solid #3dbb82; /* hijau muda */
        font-weight: 500;
    }
    .running-wrapper marquee {
        font-size: 16px;
    }

    .kontak-card {
        background: #e6f4f1;
        border: 3px solid #3dbb82;
        border-radius: 12px;
        padding: 25px;
        margin-top: 20px;
    }
    .kontak-logo {
        display: block;
        margin: 0 auto 15px auto;
        max-width: 150px;
    }
    .kontak-text {
        font-size: 16px;
        color: #145a32;
        line-height: 1.6;
    }
    .kontak-text a { color: #145a32; text-decoration: underline; }
    .maps-logo iframe {
        width: 100%;
        height: 250px;
        border-radius: 12px;
        border: 2px solid #3dbb82;
    }

    .running-bottom {
        width: 100%;
        background: #146c43;
        color: white;
        padding: 8px 0;
        font-weight: 500;
        position: fixed;
        bottom: 0;
        left: 0;
        z-index: 999;
    }
    .running-bottom marquee {
        font-size: 16px;
    }

    @media(max-width:768px){
        .maps-logo iframe { height: 200px; margin-top: 15px; }
        .kontak-logo { max-width: 120px; }
        .kontak-text { text-align: center; }
    }
</style>

<!-- RUNNING TEXT ATAS -->
<div class="running-wrapper">
    <marquee scrollamount="6">
        ✨ Dawuh Guruku KH. Ahmad Muzammil: "Ilmu iku amaliyah, adab iku cahyané..." ✨
    </marquee>
</div>

<!-- KONTAK -->
<div class="container my-5">
    <h2 style="color: #146c43;">Kontak Pesantren</h2>
    <div class="kontak-card">
        <div class="row align-items-center">
            <div class="col-md-6 text-center mb-3 mb-md-0">
                <img src="{{ asset('assets/frontend/img/logo.png') }}" class="kontak-logo" alt="Logo Yayasan">
                <p class="kontak-text">
                    <strong>Alamat:</strong><br>
                    Jl. Parangtritis Km 22, Tegalsari, Donotirto, <br>
                    Kec. Kretek, Kab. Bantul, Yogyakarta<br><br>
                    <strong>Website:</strong> <a href="https://cyberdakwah.com" target="_blank">cyberdakwah.com</a><br>
                    <strong>Telepon:</strong> (0274) 690 4827<br>
                    <strong>Nomor HP (Cyber Dakwah):</strong> 0878‑3818‑7964<br>
                    <strong>Email Yayasan:</strong> <a href="mailto:rohmatulumam97@gmail.com">rohmatulumam97@gmail.com</a>
                </p>
            </div>
            <div class="col-md-6">
                <div class="maps-logo">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.3077432491965!2d110.45739821533108!3d-7.913118794220054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1d4f8038b567%3A0x3c6e6c021529f6bc!2sPondok%20Pesantren%20Rohmatul%20Ummah!5e0!3m2!1sen!2sid!4v1697623456789!5m2!1sen!2sid" 
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- RUNNING TEXT BAWAH -->
<div class="running-bottom">
    <marquee scrollamount="6">
        ✨ Ayo Mondok! ✨
    </marquee>
</div>

@endsection
