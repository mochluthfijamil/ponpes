<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PengumumanAdminController extends Controller
{
    public function index()
    {
        return view('admin.pengumuman.index');
    }

    public function create()
    {
        return view('admin.pengumuman.create');
    }

    public function edit($id)
    {
        return view('admin.pengumuman.edit', compact('id'));
    }
}
