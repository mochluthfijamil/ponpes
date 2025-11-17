<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class PengumumanController extends Controller
{
    public function index()
    {
        return view('frontend.pengumuman');
    }
}
