<?php

namespace Database\Seeders;

use App\Models\Petuga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Petuga::insert(
            [
                [
                    'nama_petugas' => 'Dindin',
                    'jabatan' => 'Staff Perpustakaan',
                    'no_telp' => '087666555444',
                    'alamat' => 'Malang',
                ],
                [
                    'nama_petugas' => 'Okta',
                    'jabatan' => 'Staff Perpustakaan',
                    'no_telp' => '087666888444',
                    'alamat' => 'Madiun',
                ],
                [
                    'nama_petugas' => 'Susan',
                    'jabatan' => 'Staff Perpustakaan',
                    'no_telp' => '0834295567999',
                    'alamat' => 'Malang',
                ],
                [
                    'nama_petugas' => 'Zuya',
                    'jabatan' => 'Kepala Perpustakaan',
                    'no_telp' => '09843746933848',
                    'alamat' => 'Malang',
                ],
                [
                    'nama_petugas' => 'Fia',
                    'jabatan' => 'Manajer Perpustakaan',
                    'no_telp' => '08741976419789',
                    'alamat' => 'Malang',
                ],
                [
                    'nama_petugas' => 'Adinda',
                    'jabatan' => 'Staff Perpustakaan',
                    'no_telp' => '098439246873687',
                    'alamat' => 'Malang',
                ],
            ]
        );
    }
}
