<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_anggota',
        'jenis_kelamin',
        'no_telp',
        'alamat'
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'anggota_id','id');
    }
}
