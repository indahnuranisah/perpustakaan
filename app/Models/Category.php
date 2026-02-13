<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Tambahkan 'deskripsi' agar bisa diisi lewat Seeder/Form
    protected $fillable = ['nama_kategori', 'deskripsi'];

    // Relasi: Satu kategori memiliki banyak buku
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}