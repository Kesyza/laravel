<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    public $table = 'pembelian';

    protected $fillabel = ['namaBarang', 'namaSuplier', 'qty', 'tanggalBeli'];
}
