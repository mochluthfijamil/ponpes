<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ProgramController extends Controller
{
    public function index()
    {
        return view('frontend.program');
    }
}
