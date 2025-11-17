@extends('frontend.layouts.main')

@section('content')

<style>
    /* RUNNING TEXT */
    .running-wrapper {
        width: 100%;
        background: #146c43;
        color: white;
        padding: 8px 0;
        border-bottom: 4px solid #3dbb82;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .section-title {
        font-size: 28px;
        font-weight: 700;
    }
</style>

<!-- RUNNING TEXT -->
<div class="running-wrapper">
    <marquee scrollamount="6">
        ✨ Info Pesantren: Jangan lewatkan brosur terbaru kami! ✨
    </marquee>
</div>

<div class="container my-5">
    <h2 class="section-title text-center mb-4">Brosur Pesantren</h2>

    @if($brosurs->count() == 0)
        <p class="text-center text-muted">Belum ada brosur tersedia.</p>
    @else
        <ul class="list-group">
            @foreach($brosurs as $b)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $b->nama }}
                    <a href="{{ asset('storage/brosur/'.$b->file) }}" target="_blank" class="btn btn-primary btn-sm">Lihat / Download</a>
                </li>
            @endforeach
        </ul>
    @endif
</div>

@endsection
