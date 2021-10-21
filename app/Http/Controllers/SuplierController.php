<?php

namespace App\Http\Controllers;

use App\Models\Suplier;

class SuplierController extends Controller
{
    public function Suplier()
    {
        $data = Suplier::all();
        return view('test-suplier', compact('data'));
    }
}
