<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Galeri;   // ← INI YANG WAJIB ADA

class HomeController extends Controller
{
    public function index()
    {
        $galeri = Galeri::latest()->get();

        return view('frontend.home', compact('galeri'));
    }
}
