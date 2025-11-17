<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brosur;
use Illuminate\Http\Request;

class BrosurController extends Controller
{
    // Halaman frontend brosur
    public function index()
    {
        $brosurs = Brosur::all();
        return view('frontend.brosur', compact('brosurs'));
    }

    // Admin: list brosur
    public function adminIndex()
    {
        $brosurs = Brosur::all();
        return view('admin.brosur.index', compact('brosurs'));
    }

    // Admin: form tambah brosur
    public function create()
    {
        return view('admin.brosur.create');
    }

    // Admin: simpan brosur
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'file' => 'required|mimes:pdf,doc,docx|max:5120'
        ]);

        $file = $request->file('file');
        $filename = time().'_'.$file->getClientOriginalName();
        $file->storeAs('public/brosur', $filename);

        Brosur::create([
            'nama' => $request->nama,
            'file' => $filename
        ]);

        return redirect()->route('admin.brosur.index')->with('success', 'Brosur berhasil ditambahkan!');
    }

    // Admin: hapus brosur
    public function destroy($id)
    {
        $brosur = Brosur::findOrFail($id);
        \Storage::delete('public/brosur/'.$brosur->file);
        $brosur->delete();

        return redirect()->route('admin.brosur.index')->with('success', 'Brosur berhasil dihapus!');
    }
}
