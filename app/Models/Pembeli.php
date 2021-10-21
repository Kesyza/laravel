<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    public $table = 'pembeli';

    protected $fillabel = ['nama', 'jenisKelamin', 'alamat', 'kodePos', 'kota', 'tanggalLahir'];
}
