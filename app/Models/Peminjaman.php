<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl_pinjam',
        'tgl_kembali',
        'buku_id',
        'petugas_id',
        'anggota_id'
    ];

    public function anggota(){
        return $this->belongsTo(Anggota::class, 'anggota_id', 'id');
    }

    public function petugas(){
        return $this->belongsTo(Petuga::class, 'petugas_id', 'id');
    }

    public function book(){
        return $this->belongsTo(Book::class, 'buku_id', 'id');
    }
}
