<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ProfilAdminController extends Controller
{
    public function index()
    {
        return view('admin.profil.index');
    }
}
