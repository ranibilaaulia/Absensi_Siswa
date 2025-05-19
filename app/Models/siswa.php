<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class siswa extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'nisn', 'alamat', 'jk',  'no_telp', 'username', 'password', 'no_telp_wm', 'nama_wm', 'alamat_wm', 'lokal_id', 'user_id'];


    public function lokal()
    {
        return $this->belongsTo(lokal::class, 'lokal_id');
    }
    
    public function siswaCollection()
    {
        return $this->hasMany(siswa::class, 'user_id');
    }
     public function absensis()
    {
        return $this->hasMany(Absen::class, 'siswa_id');
    }
}