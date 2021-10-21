<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SuplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['nama'=>'Altaf Coy', 'alamat'=>'Bandung', 'kodePos'=>'89076', 'kota'=>'Bandung'],
            ['nama'=>'Kidam Damz', 'alamat'=>'Sayuran', 'kodePos'=>'56342', 'kota'=>'Bandung'],
            ['nama'=>'Aceng Aja', 'alamat'=>'Rancamanyar', 'kodePos'=>'67854', 'kota'=>'Bandung'],
            ['nama'=>'Ikhsan Mio', 'alamat'=>'Kopo', 'kodePos'=>'45231', 'kota'=>'Bandung'],
            ['nama'=>'Sila Tubis', 'alamat'=>'Rancamanyar', 'kodePos'=>'78906', 'kota'=>'Bandung'],
            ];
            // masukkan data ke database
            DB::table('suplier')->insert($suplier);
    }
}
