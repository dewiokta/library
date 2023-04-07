<?php

namespace Database\Seeders;

use App\Models\Rak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RaksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rak::insert([
            [
                'nama_rak'=> 'Novel',
                'lokasi_rak'=>'Rak 3'
            ],
            [
                'nama_rak'=> 'Komik',
                'lokasi_rak'=>'Rak 2'
            ],
            [
                'nama_rak'=> 'Soal-soal',
                'lokasi_rak'=>'Rak 8'
            ],
            [
                'nama_rak'=> 'Majalah',
                'lokasi_rak'=>'Rak 8'
            ],
            [
                'nama_rak'=> 'Astronomi',
                'lokasi_rak'=>'Rak 7'
            ],
        ]);
    }
}
