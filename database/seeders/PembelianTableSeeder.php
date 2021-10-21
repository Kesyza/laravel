<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PembelianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['namaBarang'=>'Permen', 'namaSuplier'=>'Altaf Coy', 'qty'=>'19', 'tanggalBeli'=>'2021-10-13'],
            ['namaBarang'=>'Coklat', 'namaSuplier'=>'Kidam Damz', 'qty'=>'1', 'tanggalBeli'=>'2021-10-14'],
            ['namaBarang'=>'Chiki', 'namaSuplier'=>'Aceng aja', 'qty'=>'8', 'tanggalBeli'=>'2021-10-15'],
            ['namaBarang'=>'Susu', 'namaSuplier'=>'Ikhsan Mio', 'qty'=>'7', 'tanggalBeli'=>'2021-10-17'],
            ['namaBarang'=>'Es Krim', 'namaSuplier'=>'Sila Tubis', 'qty'=>'10', 'tanggalBeli'=>'2021-10-18'],
            ];
            // masukkan data ke database
            DB::table('pembelian')->insert($pembelian);
    }
}
