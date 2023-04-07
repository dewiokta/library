<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeminjamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Peminjaman::insert([
            [
                'tgl_pinjam'=>'2023-03-30',
                'tgl_kembali'=>'2023-04-12',
                'buku_id'=>3,
                'petugas_id'=>4,
                'anggota_id'=>3,
            ],
            [
                'tgl_pinjam'=>'2023-02-20',
                'tgl_kembali'=>'2023-02-28',
                'buku_id'=>2,
                'petugas_id'=>5,
                'anggota_id'=>4,
            ],
            [
                'tgl_pinjam'=>'2023-03-15',
                'tgl_kembali'=>'2023-03-23',
                'buku_id'=>6,
                'petugas_id'=>4,
                'anggota_id'=>5,
            ],
            [
                'tgl_pinjam'=>'2023-01-25',
                'tgl_kembali'=>'2023-02-10',
                'buku_id'=>5,
                'petugas_id'=>4,
                'anggota_id'=>7,
            ],
        ]);
    }
}
