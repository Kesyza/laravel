<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama'=>'Permen', 'varian'=>'Susu', 'hargaBeli'=>'500', 'hargaJual'=>'1000'],
            ['nama'=>'Coklat', 'varian'=>'Coklat', 'hargaBeli'=>'2000', 'hargaJual'=>'3000'],
            ['nama'=>'Chiki', 'varian'=>'BBQ', 'hargaBeli'=>'1500', 'hargaJual'=>'2000'],
            ['nama'=>'Susu', 'varian'=>'Vanila', 'hargaBeli'=>'4500', 'hargaJual'=>'5000'],
            ['nama'=>'Es Krim', 'varian'=>'Pelangi', 'hargaBeli'=>'7000', 'hargaJual'=>'10000'],
            ];
            // masukkan data ke database
            DB::table('barang')->insert($barang);
    }
}
