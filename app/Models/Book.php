<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_buku',
        'kode_buku',
        'penulis',
        'penerbit',
        'thn_terbti',
        'rak_id'
    ];

    public function rak(){
        return $this->belongsTo(Rak::class, 'rak_id', 'id');
    }
}
