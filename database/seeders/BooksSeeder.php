<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            [
                'judul_buku'=>'Hujan',
                'kode_buku'=>'N12',
                'penulis'=>'Tereliye',
                'penerbit'=>'Gramedia',
                'thn_terbit'=>'2001',
                'rak_id'=>2,
            ],
            [
                'judul_buku'=>'Naruto Vol.8',
                'kode_buku'=>'K22',
                'penulis'=>'Masashi Kishimoto',
                'penerbit'=>'Gramedia',
                'thn_terbit'=>'2009',
                'rak_id'=>3,
            ],
            [
                'judul_buku'=>'Latian SBMPN',
                'kode_buku'=>'S92',
                'penulis'=>'Ganesha',
                'penerbit'=>'Gramedia',
                'thn_terbit'=>'2019',
                'rak_id'=>4,
            ],
            [
                'judul_buku'=>'Teori Blackhole',
                'kode_buku'=>'A21',
                'penulis'=>'Tomas',
                'penerbit'=>'Gramedia',
                'thn_terbit'=>'2015',
                'rak_id'=>6,
            ],
            [
                'judul_buku'=>'Jujutsu Kaisen Vol.20',
                'kode_buku'=>'K86',
                'penulis'=>'Gege Akutami',
                'penerbit'=>'Gramedia',
                'thn_terbit'=>'2018',
                'rak_id'=>3,
            ],
        ]);
    }
}
