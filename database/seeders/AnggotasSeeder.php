<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anggota::insert([
            [
                'nama_anggota' => 'Vina',
                'jenis_kelamin' => 'Perempuan',
                'no_telp' => '0876398395873',
                'alamat' => 'Malang',
            ],
            [
                'nama_anggota' => 'Alfian',
                'jenis_kelamin' => 'Laki-Laki',
                'no_telp' => '0887867689987',
                'alamat' => 'Blimbing',
            ],
            [
                'nama_anggota' => 'Rina',
                'jenis_kelamin' => 'Perempuan',
                'no_telp' => '0857645824687',
                'alamat' => 'Malang',
            ],
            [
                'nama_anggota' => 'Dino',
                'jenis_kelamin' => 'Laki-Laki',
                'no_telp' => '0834682346864',
                'alamat' => 'Lawang',
            ],
            [
                'nama_anggota' => 'Dna',
                'jenis_kelamin' => 'Perempuan',
                'no_telp' => '0834686472345',
                'alamat' => 'Batu',
            ],
        ]);
    }
}
