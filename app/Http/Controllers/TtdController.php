<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TtdController extends Controller
{
    public function index()
    {
        return view('ttd'); // Tampilkan ke halaman tampilan kategori
    }
}
