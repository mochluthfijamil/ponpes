<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ProgramAdminController extends Controller
{
    public function index()
    {
        return view('admin.program.index');
    }

    public function create()
    {
        return view('admin.program.create');
    }

    public function edit($id)
    {
        return view('admin.program.edit', compact('id'));
    }
}
