<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;

class PembeliController extends Controller
{
    public function Pembeli()
    {
        $data = Pembeli::all();
        return view('test-pembeli', compact('data'));
    }
}
