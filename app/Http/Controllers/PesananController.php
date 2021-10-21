<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;

class PesananController extends Controller
{
    public function Pesanan()
    {
        $data = Pesanan::all();
        return view('test-pesanan', compact('data'));
    }
}
