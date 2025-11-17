{{-- resources/views/frontend/layouts/main.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $title ?? 'Pondok Pesantren Rohmatul Umam' }}</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body { font-family: "Poppins", sans-serif; background: #f2f6f9; margin:0; padding:0; }

/* TOPBAR */
.topbar {
    background: linear-gradient(90deg, #0a4d2c, #0f7d46, #0a4d2c);
    color: white;
    padding: 6px 0;
    font-size: 13px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
}
.topbar-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 10px;
}
.topbar-title { font-size: 14px; font-weight: 600; }
.date-box {
    font-weight: 500;
    background: rgba(255,255,255,0.15);
    padding: 3px 10px;
    border-radius: 20px;
}
.search-bar input {
    border-radius: 20px;
    padding: 4px 12px;
    border: none;
    outline: none;
    width: 180px;
}
.social-icons a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 28px;
    height: 28px;
    background: rgba(255,255,255,0.12);
    border-radius: 50%;
    margin-left: 6px;
    color: #fff;
    font-size: 14px;
    transition: .3s;
    backdrop-filter: blur(3px);
}
.social-icons a:hover {
    background: rgba(255,255,255,0.25);
    transform: translateY(-2px) scale(1.08);
    box-shadow: 0 0 8px rgba(255,255,255,0.4);
}

/* NAVBAR */
.navbar-custom {
    background: white !important;
    padding: 10px 0;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
}
.navbar-custom .navbar-brand img { height: 50px; transition: .3s; }
.navbar-custom .navbar-brand img:hover { transform: scale(1.05); }

/* Navbar items lebih rapat & font lebih kecil */
.navbar-custom .navbar-nav .nav-link {
    font-size: 15px;
    font-weight: 600;
    color: #1b1b1b !important;
    margin-left: 8px;  /* jarak antar menu */
    padding: 5px 8px;
    transition: .3s;
}
.navbar-custom .navbar-nav .nav-link:hover { color: #0d6efd !important; }

/* Daftar Online button */
.navbar-custom .nav-link-daftar {
    color: #fff !important;
    background-color: #3dbb82;
    border-radius: 6px;
    padding: 5px 12px !important;
    margin-left: 12px;
    transition: .3s;
}
.navbar-custom .nav-link-daftar:hover {
    background-color: #34a172;
    color: #fff !important;
}

/* Dropdown Submenu */
.dropdown-menu .dropdown-item:hover {
    background-color: #3dbb82;
    color: #fff;
}

/* Responsive Navbar */
@media (max-width: 991px) {
    .navbar-custom .navbar-nav .nav-link {
        margin-left: 0;
        padding: 8px 0;
    }
    .navbar-custom .nav-link-daftar {
        margin-left: 0;
        width: 100%;
        text-align: center;
    }
}
</style>
</head>
<body>

<!-- TOPBAR -->
<div class="topbar">
    <div class="container topbar-content">
        <div class="topbar-title">Ikuti Sosial Media Kami</div>
        <div class="date-box"><span id="tanggalOtomatis"></span></div>
        <div class="search-bar"><input type="text" placeholder="Cari sesuatu..."></div>
        <div class="social-icons">
            <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
            <a href="#" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
</div>

<script>
const today = new Date();
document.getElementById("tanggalOtomatis").innerText = today.toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' });
</script>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/frontend/img/logo.png') }}" alt="Logo Pesantren">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/profil') }}">Profil</a></li>

                <!-- Dropdown Pendidikan -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pendidikanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pendidikan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="pendidikanDropdown">
                        <li><a class="dropdown-item" href="{{ url('/pendidikan/kbit') }}">KBIT AR-RAHMAH</a></li>
                        <li><a class="dropdown-item" href="{{ url('/pendidikan/tkit') }}">TKIT AR-RAHMAH</a></li>
                        <li><a class="dropdown-item" href="{{ url('/pendidikan/sdit') }}">SDIT AR-RAHMAH</a></li>
                        <li><a class="dropdown-item" href="{{ url('/pendidikan/smpit') }}">SMPIT AR-RAHMAH</a></li>
                        <li><a class="dropdown-item" href="{{ url('/pendidikan/smait') }}">SMAIT AR-RAHMAH</a></li>
                    </ul>
                </li>

                <!-- Dropdown Artikel -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="artikelDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Artikel
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="artikelDropdown">
                        <li><a class="dropdown-item" href="{{ url('/artikel/kegiatan') }}">Kegiatan</a></li>
                        <li><a class="dropdown-item" href="{{ url('/artikel/berita') }}">Berita</a></li>
                        <li><a class="dropdown-item" href="{{ url('/artikel/prestasi') }}">Prestasi</a></li>
                    </ul>
                </li>

                <!-- Menu langsung -->
                <li class="nav-item"><a class="nav-link" href="{{ url('/brosur') }}">Brosur</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/galeri') }}">Galeri</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/kontak') }}">Kontak</a></li>
                <li class="nav-item"><a class="nav-link nav-link-daftar" href="{{ url('/daftar-online') }}">Daftar Online</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<main class="min-vh-100">@yield('content')</main>

<!-- FOOTER -->
<footer class="bg-dark text-light text-center py-3 mt-5">
    <small>© 2025 Pondok Pesantren Rohmatul Umam</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
