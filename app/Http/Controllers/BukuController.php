<?php

namespace App\Http\Controllers;

use App\Models\Book; // Memanggil codingan Model kamu
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        // Mengambil data buku dari database (kodinganmu di model/seeder)
        $books = Book::with('category')->get();

        // Menampilkan ke layar
        return view('buku.index', compact('books'));
    }
}