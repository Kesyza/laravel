<?php

namespace App\Http\Controllers;

use App\Models\Barang;

class BarangController extends Controller
{
    public function Barang()
    {
        $data = Barang::all();
        return view('test-barang', compact('data'));
    }

    }

