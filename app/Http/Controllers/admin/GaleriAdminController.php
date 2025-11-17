<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class GaleriAdminController extends Controller
{
    public function index()
    {
        return view('admin.galeri.index');
    }

    public function create()
    {
        return view('admin.galeri.create');
    }
}
