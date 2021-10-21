<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PesananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['namaPelanggan'=>'Key Cute', 'namaBarang'=>'Permen', 'qty'=>'1', 'tanggalPesan'=>'2021-10-19'],
            ['namaPelanggan'=>'Amel Galak', 'namaBarang'=>'Coklat', 'qty'=>'1', 'tanggalPesan'=>'2021-10-19'],
            ['namaPelanggan'=>'Dina Baik', 'namaBarang'=>'Chiki', 'qty'=>'2', 'tanggalPesan'=>'2021-10-19'],
            ['namaPelanggan'=>'Erin Cans', 'namaBarang'=>'Susu', 'qty'=>'6', 'tanggalPesan'=>'2021-10-19'],
            ['namaPelanggan'=>'Abo Lakik', 'namaBarang'=>'Es Krim', 'qty'=>'5', 'tanggalPesan'=>'2021-10-19'],
            ];
            // masukkan data ke database
            DB::table('pesanan')->insert($pesanan);
    }
}
