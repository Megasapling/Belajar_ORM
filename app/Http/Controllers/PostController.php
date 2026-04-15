<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Import model Post agar bisa mengambil data

class PostController extends Controller
{
    // Fungsi index inilah yang dicari oleh rute Anda
    public function index()
    {
        // Mengambil semua data dari tabel posts melalui Model Post
        $data = Post::all(); 
        
        // Mengirim data ke file view bernama tampil_post.blade.php
        return view('tampil_post', compact('data'));
    }
}