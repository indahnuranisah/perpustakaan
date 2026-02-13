<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menggabungkan data deskripsi sesuai tugas evaluasi
        $categories = [
            [
                'nama_kategori' => 'Teknologi', 
                'deskripsi' => 'Buku seputar IT dan Pemrograman'
            ],
            [
                'nama_kategori' => 'Sains', 
                'deskripsi' => 'Buku ilmu pengetahuan alam dan antariksa'
            ],
            [
                'nama_kategori' => 'Sastra', 
                'deskripsi' => 'Kumpulan novel dan karya tulis kreatif'
            ],
        ];

        // Looping untuk memasukkan data secara aman
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}