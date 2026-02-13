<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book; // Wajib ada

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::insert([
            [
                'category_id' => 1,
                'judul' => 'Laravel Dasar',
                'penulis' => 'Taylor',
                'tahun_terbit' => 2024,
                'stok' => 5
            ],
            [
                'category_id' => 2,
                'judul' => 'Fisika Modern',
                'penulis' => 'Einstein',
                'tahun_terbit' => 2020,
                'stok' => 3
            ],
            [
        'category_id' => 3, // Ini ID untuk Sastra
        'judul' => 'Laskar Pelangi',
        'penulis' => 'Andrea Hirata',
        'tahun_terbit' => 2005,
        'stok' => 10
    ],
        ]);
    }
}