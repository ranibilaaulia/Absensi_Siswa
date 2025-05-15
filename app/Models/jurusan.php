<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    
    protected $fillable = ['kode_jurusan', 'nama'];

    public function lokal()
    {
        return $this->hasMany(lokal::class);
    }
}