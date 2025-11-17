<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BeritaAdminController extends Controller
{
    public function index()
    {
        return view('admin.berita.index');
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function edit($id)
    {
        return view('admin.berita.edit', compact('id'));
    }
}
