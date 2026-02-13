<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'category_id',
        'judul',
        'penulis',
        'tahun_terbit',
        'stok'
    ]; //

    // Relasi: Satu buku merujuk ke satu kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}