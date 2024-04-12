<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index()
    {
        return view('mitra'); // Tampilkan ke halaman tampilan kategori
    }
}
