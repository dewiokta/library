<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petuga extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_petugas',
        'jabatan',
        'no_telp',
        'alamat'
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'pertugas_id','id');
    }
}
