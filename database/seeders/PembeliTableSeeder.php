<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PembeliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama'=>'Key Cute', 'jenisKelamin'=>'Perempuan', 'alamat'=>'Rancamanyar', 'kodePos'=>'89076', 'kota'=>'Bandung', 'tanggalLahir'=>'2005-01-15'],
            ['nama'=>'Amel Galak', 'jenisKelamin'=>'Perempuan', 'alamat'=>'Jl. Sadang Pesantren', 'kodePos'=>'56342', 'kota'=>'Bandung', 'tanggalLahir'=>'2004-01-28'],
            ['nama'=>'Dina Baik', 'jenisKelamin'=>'Perempuan', 'alamat'=>'BB Nugraha', 'kodePos'=>'67854', 'kota'=>'Bandung', 'tanggalLahir'=>'2004-12-04'],
            ['nama'=>'Erin Cans', 'jenisKelamin'=>'Perempuan', 'alamat'=>'Cibaduyut', 'kodePos'=>'45231', 'kota'=>'Bandung', 'tanggalLahir'=>'2004-01-06'],
            ['nama'=>'Abo Lakik', 'jenisKelamin'=>'Laki-laki', 'alamat'=>'Cibogo', 'kodePos'=>'78906', 'kota'=>'Bandung', 'tanggalLahir'=>'2003-06-15'],
            ];
            // masukkan data ke database
            DB::table('pembeli')->insert($pembeli);
    }
}
