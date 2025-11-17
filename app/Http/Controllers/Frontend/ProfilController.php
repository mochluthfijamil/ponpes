<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    /**
     * Menampilkan halaman profil pesantren
     */
    public function index()
    {
        $data = [
            'title' => 'Profil Pesantren',
            'description' => 'Sejarah, visi misi, dan profil lengkap Pesantren.',
            'breadcrumb' => ['Profil']
        ];

        return view('frontend.profil', $data);
    }
}
