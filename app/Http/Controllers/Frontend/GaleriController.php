<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        // Ambil semua data galeri
        $galeri = Galeri::all();

        // Kirim ke view
        return view('frontend.galeri', compact('galeri'));
    }
}
