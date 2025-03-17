@extends('templates.layout')
@section('title','data kelas')
@section('kontent')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                tambah data Siswa
            </div>
            <div class="card-body">
                <form action="{{route('siswa.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col mt-2">
                        <label for="nama" class="text-gray-900">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="masukkan nama siswa" required>
                    </div>
                    <div class="col mt-2">
                        <label for="nisn" class="text-gray-900">Nisn</label>
                        <input type="text" name="nisn" id="nisn" class="form-control" placeholder="masukkan nisn siswa" required>
                    </div>
                    <div class="col mt-2">
                        <label for="jk" class="text-gray-900">jenis kelamin</label>
                        <input type="text" name="jk" id="nisn" class="form-control" placeholder="masukkan jenis kelamin" required>
                    </div>
                    <div class="col mt-2">
                        <label for="alamat" class="text-gray-900">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="masukkan alamat" required></textarea>
                    </div>
                    <div class="col mt-2">
                        <label for="no_telp" class="text-gray-900">Nomor Telepon</label>
                        <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="masukkan nomor telepon" required>
                    </div>
                    <div class="col mt-2">
                        <label for="nama_orgtua" class="text-gray-900">Nama orang tua</label>
                        <input type="text" name="nama_orgtua" id="nama_orgtua" class="form-control" placeholder="masukkan nama orang tua" required>
                    </div>
                    <div class="col mt-2">
                        <label for="kelas" class="text-gray-900">Kelas</label>
                        <select name="lokal_id" id="lokal_id" class="form-control mt-2" required>
                    <div class="col mt-2">
                        <label for="user_id" class="text-gray-900">user id</label>
                        <input type="text" name="user_id" id="user_id" class="form-control" placeholder="masukkan user id" required>
                    </div>
                    <div class="col mt-2">
                            <option disabled selected value="">Pilih Kelas</option>
                            @foreach($kelas as $k)
                                <option value="{{$k['id']}}">{{$k['nama_kelas']}}</option>
                            @endforeach
                        </select>
                        
                    </div>
                    <div class="col mt-2">
                        <label for="jk" class="text-gray-900">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control mt-2" required>
                            <option disabled selected value="">Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="col mt-2">
                        <label for="alamat" class="text-gray-900">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="masukkan alamat" required></textarea>
                    </div>
                    <div class="col mt-2">
                        <label for="nohp" class="text-gray-900">Nomor Handphone</label>
                        <input type="number" name="nohp" id="nohp" class="form-control" placeholder="masukkan nomor handphone">
                    </div>
                

                    <button type="submit" class="btn btn-md btn-primary float-right mt-4">Simpan</button>
                </form>
            </div>
        </div>
        <div class="col">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection