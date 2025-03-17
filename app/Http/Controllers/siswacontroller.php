<?php

namespace App\Http\Controllers;

use App\Models\lokal;
use App\Models\siswa;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class SiswaController extends Controller
{
    //
    public function index(): View
    {
        $data_siswa = siswa::all();
        return view('siswa.index', [
            "menu" => "siswa",
            "title" => "Data Siswa",
            "data_siswa" => $data_siswa
        ]);
    }

    public function create(): View
    {
        $kelas = lokal::all();
        return view('siswa.create', [
            "menu" => "siswa",
            "title" => "Tambah Data Siswa",
            "kelas" => $kelas
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validasi = $request->validate([
            "nama" => "required",
            "nisn" => "required",
            "jk" => "required",
            "alamat" => "required",
            "no_telp" => "required",
            "nama_ortgtua" => "required",
            "lokal_id" => "required",
            "user_id" => "required"
            
            
        ],
        [
            "nama.required" => "Nama Harus Diisi",
            "nisn.required" => "NISN Harus Diisi",
            "jk.required" => "Jenis Kelamin Harus Diisi",
            "alamat.required" => "Alamat Harus Diisi",
            "no_telp.required" => "no telepon Harus Diisi",
            "nama_ortgtua.required" => "Nama Orang Tua Harus Diisi",
            "lokal_id.required" => "Kelas Harus Diisi",
            "user_id.required" => "User Id Harus Diisi"
            
        ]);


        $siswa = new siswa;
        $siswa->nama = $validasi['nama'];
        $siswa->nisn = $validasi['nisn'];
        $siswa->jk = $validasi['jk'];
        $siswa->alamat = $validasi['alamat'];
        $siswa->no_telp = $request->no_telp;
        $siswa->nama_ortgtua = $validasi['nama_ortgtua'];
        $siswa->lokal_id = $validasi['lokal_id'];
        $siswa->user_id = $validasi['user_id'];
        
        $siswa->save();

        return redirect()->route('siswa.index');
    }
    public function show($id): view
    {
        $siswa = Siswa::find($id);
        return view('siswa.show', [
            'menu' => 'siswa',
            'title' => 'Detail Data Siswa',
            'siswa' => $siswa
        ]);
    }

    public function edit($id): view
    {
        $siswa = Siswa::with('lokal')->find($id);
        $kelas = Lokal::all();
        return view('siswa.edit', [
            'menu' => 'siswa',
            'title' => 'Edit Data Siswa',
            'siswa' => $siswa,
            'dtkelas' => $kelas
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $validasi = $request->validate([
            'nama' => 'nullable',
            'nisn' => 'nullable',
            'jk' => 'nullable',
            'alamat' => 'nullable',
            'nohp' => 'nullable',
            'nama_ortu' => 'nullable',
            'local_id' => 'nullable',
            'user_id' => 'nullable'
        ]);

        $siswa = Siswa::find($id);
        $siswa->nama = $validasi['nama'] ?? $siswa->nama;
        $siswa->nisn = $validasi['nisn'] ?? $siswa->nisn;
        $siswa->jk = $validasi['jk'] ?? $siswa->jk;
        $siswa->alamat = $validasi['alamat'] ?? $siswa->alamat;
        $siswa->nohp = $validasi['nohp'] ?? $siswa->nohp;
        $siswa->nama_ortu = $validasi['nama_ortu'] ?? $siswa->nama_ortu;
        $siswa->local_id = $validasi['local_id'] ?? $siswa->local_id;
        $siswa->user_id = $validasi['user_id'] ?? $siswa->user_id;


        $siswa->save();
        return redirect(route('siswa.index'));
    }
    public function destroy($id): RedirectResponse
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect(route('siswa.index'));
    }

    
}

