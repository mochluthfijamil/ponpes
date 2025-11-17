@extends('frontend.layouts.main')

@section('content')

<style>
    body { background: #e6f4f1; font-family: "Poppins", sans-serif; }

    .profile-card {
        background: #ffffff;
        border: 3px solid #3dbb82;
        border-radius: 16px;
        padding: 24px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        transition: transform .3s ease, box-shadow .3s ease;
    }
    .profile-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }
    .profile-title {
        color: #145a32;
        font-weight: 700;
        margin-bottom: 16px;
        border-left: 6px solid #3dbb82;
        padding-left: 12px;
    }
    /* RUNNING TEXT */
    .running-wrapper {
        width: 100%;
        background: #146c43;
        color: white;
        padding: 8px 0;
        border-bottom: 4px solid #3dbb82;
    }
    .running-wrapper marquee {
        font-size: 18px;
        font-weight: 600;
    }
    .profile-content {
        color: #065f46;
        line-height: 1.7;
    }
    .profile-img {
        width: 180px;
        height: 180px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #ffffff;
        box-shadow: 0 6px 20px rgba(0,0,0,0.2);
        margin-bottom: 16px;
    }
</style>
<!-- RUNNING TEXT -->
<div class="running-wrapper">
    <marquee scrollamount="6">
        ✨ Dawuh Guruku KH. Ahmad Muzammil: "Ilmu iku amaliyah, adab iku cahyané..." ✨
    </marquee>
</div>

{{-- Header Foto Pengasuh --}}
<div class="text-center py-8">
    <img src="{{ asset('assets/frontend/img/kk.webp') }}" class="profile-img" alt="Pengasuh">
    <div class="w-28 h-1 bg-emerald-600 mx-auto mt-3 rounded-full"></div>
</div>

{{-- Konten Profil --}}
<div class="container max-w-5xl mx-auto space-y-6 pb-12">

    @php
        $cards = [
            [
                'title' => '1. Sejarah & Latar Belakang',
                'content' => '
<b>Nama dan Makna:</b> “Rohmatul Umam” artinya “rahmat untuk semua umat”.<br>
<b>Lokasi:</b> Jl. Parangtritis Km 22, Dusun Tegalsari, Donotirto, Kretek, Bantul, Yogyakarta.<br>
<b>Tanggal Berdiri:</b> 5 Agustus 1997 / 1 Rabi’ul Akhir 1418 H.<br>
<p class="mt-2 font-semibold text-emerald-700">Awal Pendirian:</p>
<ul class="list-disc ml-6">
<li>Numpang tinggal di rumah KH Achmadi Zaenuri selama 1 tahun.</li>
<li>Membeli tanah ± 340 m² dari infaq Prof. Dr. H. M. Sambas Sabarnurdin.</li>
<li>Mushalla dan tempat tinggal awal dari bambu.</li>
</ul>'
            ],
            [
                'title' => '2. Profil KH. Ahmad Muzammil',
                'content' => '
<b>Kelahiran:</b> 14 Agustus 1970, Bangkalan Madura.<br>
<b>Orang Tua:</b> H. Mahrus & Sa’diyah.<br>
<p class="mt-2 font-semibold text-emerald-700">Sanad & Guru:</p>
<ul class="list-disc ml-6">
<li>KH Thabrani Abd. Aziz</li>
<li>KHR As’ad Syamsul Arifin</li>
<li>KH Abd. Muchit Muzadi</li>
<li>Gus Yusuf Jember</li>
</ul>
<p class="mt-2"><b>Wafat:</b> 27 Mei 2021. Kepemimpinan diteruskan oleh Ibu Nyai Siti Arifah & keluarga.</p>
<p class="mt-2 font-semibold text-emerald-700">Visi Dakwah:</p>
<p>Menciptakan masyarakat yang mencintai diri, agama, dan bangsa.</p>'
            ],
            [
                'title' => '3. Struktur & Program Pendidikan',
                'content' => '
<p class="font-semibold text-emerald-700">Lembaga Pendidikan Formal:</p>
<ul class="list-disc ml-6">
<li>SD / MI</li>
<li>SMP / MTs</li>
<li>SMA / MA</li>
</ul>
<p class="mt-2 font-semibold text-emerald-700">Non-Formal:</p>
<ul class="list-disc ml-6">
<li>Kitab kuning (sorogan)</li>
<li>Tahfidz Qur’an (metode Hanifida & Wafa)</li>
</ul>'
            ],
            [
                'title' => '4. Peran Sosial & Tantangan',
                'content' => '
<b>Peran:</b> Membina remaja pesisir melalui BP I: doa pagi–sore, baca Qur’an, akhlak, fiqih, kedisiplinan, dsb.<br>
<b>Tantangan:</b> Minim sarana, lingkungan sosial pesisir yang berisiko, dan menjaga estafet visi pendiri.'
            ],
            [
                'title' => '5. Filosofi & Nilai Pesantren',
                'content' => 'Pendidikan holistik: keseimbangan ibadah, sosial, akhlak, serta integrasi ilmu qauliyah & kauniyah.'
            ],
            [
                'title' => '6. Kontribusi & Warisan',
                'content' => 'Melahirkan santri yang berilmu, berakhlak, dan aktif membina masyarakat pesisir Bantul.<br>Menjadi pusat kajian Maiyah & NU di wilayah selatan DIY.'
            ],
        ];
    @endphp

    @foreach($cards as $card)
        <div class="profile-card">
            <h2 class="profile-title">{{ $card['title'] }}</h2>
            <p class="profile-content">{!! $card['content'] !!}</p>
        </div>
    @endforeach

</div>

@endsection
