<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    public function index()
    {
        return view('frontend.berita');
    }

    public function detail($slug)
    {
        return view('frontend.berita-detail', compact('slug'));
    }
}
