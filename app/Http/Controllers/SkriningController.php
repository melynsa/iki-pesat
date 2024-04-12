<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkriningController extends Controller
{
    public function index()
    {
        return view('skrining'); // Tampilkan ke halaman tampilan kategori
    }
}
