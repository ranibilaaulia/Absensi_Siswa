@extends('template_admin.layout')
@section('title', 'Tambah Data Jurusan')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endsection

@section('content')
<div class="container">
    <h2>Tambah Jurusan</h2>
    <form action="{{ route('jurusan.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="kode_jurusan">Kode Jurusan</label>
            <input type="text" name="kode_jurusan" class="form-control" placeholder="Masukkan Kode Jurusan" required>
        </div>

        <div class="form-group mt-3">
            <label for="nama">Nama Jurusan</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Jurusan" required>
        </div>
                </div>
                <div class="text-end">
                    <a href="{{route('jurusan.index')}}" class="btn btn-primary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="reset" class="btn btn-warning">
                        <i class="bi bi-arrow-clockwise"></i> Reset
                    </button>
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    function togglePassword() {
        let passwordInput = document.getElementById("password");
        let eyeIcon = document.getElementById("eyeIcon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.classList.replace("bi-eye", "bi-eye-slash");
        } else {
            passwordInput.type = "password";
            eyeIcon.classList.replace("bi-eye-slash", "bi-eye");
        }
    }
</script>

@endsection