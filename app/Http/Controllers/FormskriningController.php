<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormskriningController extends Controller
{
    public function index()
    {
        return view('formskrining'); // Tampilkan ke halaman tampilan kategori
    }
}

