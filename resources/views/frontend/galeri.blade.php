@extends('frontend.layouts.main')

@section('content')

<!-- RUNNING TEXT ATAS -->
<style>
    .running-wrapper {
        width: 100%;
        background: #146c43; /* hijau gelap */
        color: white;
        padding: 8px 0;
        border-bottom: 4px solid #3dbb82; /* hijau muda */
        font-weight: 500;
    }
    .running-wrapper marquee {
        font-size: 16px;
    }

    /* GALERI STYLING */
    .gallery-img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 12px;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .gallery-img:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }

    .section-title {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 30px;
        text-align: center;
        color: #145a32;
    }

    /* RUNNING TEXT BAWAH GALERI */
    .running-bottom {
        width: 100%;
        background: #146c43;
        color: white;
        padding: 8px 0;
        font-weight: 500;
        margin-top: 15px;
    }
    .running-bottom marquee {
        font-size: 16px;
    }
</style>

<div class="running-wrapper">
    <marquee scrollamount="6">
        ✨ Dawuh Guruku KH. Ahmad Muzammil: "Ilmu iku amaliyah, adab iku cahyané..." ✨
    </marquee>
</div>

<div class="container my-5">
    <h2 class="section-title">Galeri Pesantren</h2>

    @if($galeri->count() == 0)
        <p class="text-center text-muted">Belum ada foto galeri. Admin dapat menambahkan dari dashboard.</p>
    @else
        <div class="row g-4">
            @foreach($galeri as $g)
                <div class="col-md-4">
                    <img src="{{ asset('storage/galeri/' . $g->gambar) }}" class="gallery-img shadow">
                </div>
            @endforeach
        </div>
    @endif
</div>

<!-- RUNNING TEXT PALING BAWAH -->
<div class="running-bottom">
    <marquee scrollamount="6">
        ✨ Ayo Mondok! ✨
    </marquee>
</div>

@endsection
