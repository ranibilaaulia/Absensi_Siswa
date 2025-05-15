<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use Illuminate\Http\Request;

class jurusancontroller extends Controller
{
    public function index()
    {
        $jurusan = jurusan::all();
        return view('admin.jurusan.index', [
            'menu' => 'jurusan',
            'title' => 'Data jurusan',
            'jurusan' => $jurusan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
 {
        return view('admin.jurusan.create', [
            'menu' => 'jurusan',
            'title' => 'Tambah Data jurusan',
           
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $request->validate([
        'kode_jurusan' => 'required',
        'nama' => 'required',
    ]);

    Jurusan::create([
        'kode_jurusan' => $request->kode_jurusan,
        'nama' => $request->nama,
    ]);

    return redirect()->route('jurusan.index')->with('success', 'Data jurusan berhasil ditambahkan');
}

    public function show(string $id)
{
    $jurusan = Jurusan::findOrFail($id);
    return view('view', compact('jurusan'));
}
    /**
     * Display the specified resource.
     */
    public function edit($id)
    {
        $jurusan = jurusan::find($id);
        return view('admin.jurusan.edit', [
            'menu' => 'jurusan',
            'title' => 'Edit Data jurusan',
            'jurusan' => $jurusan
        ]);
    }

    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            'nama' => 'nullable',

        ]);

        $jurusan = jurusan::find($id);
        $jurusan->nama = $validasi['nama'] ?? $jurusan->nama;
        $jurusan->save();
        return redirect(route('jurusan.index'));
    }

}