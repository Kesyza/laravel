<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;

class PembelianController extends Controller
{
    public function Pembelian()
    {
        $data = Pembelian::all();
        return view('test-pembelian', compact('data'));
    }
}
