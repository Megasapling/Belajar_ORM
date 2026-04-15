<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post; // Sangat penting: Menghubungkan Seeder dengan Model Post

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambah data contoh ke dalam tabel posts
        Post::create([
            'title' => 'Berhasil Membuat Database SQLite',
            'content' => 'Data ini muncul karena Seeder berhasil dijalankan pada aplikasi Laravel saya.'
        ]);

        Post::create([
            'title' => 'Belajar Laravel di SMK',
            'content' => 'Menggunakan Laravel memudahkan kita dalam mengelola database tanpa query SQL yang rumit.'
        ]);
    }
}