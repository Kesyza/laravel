<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    use HasFactory;
    public $table = 'suplier';

    protected $fillabel = ['nama', 'alamat', 'kodePos', 'kota'];
}
