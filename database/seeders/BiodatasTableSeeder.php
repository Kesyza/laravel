<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $biodatas = [
            ['name'=>'Kesyza Andriana Hartuti', 'bornDate'=>'2005-01-15', 'gender'=>'Perempuan', 'address'=>'Rancamanyar', 'religion'=>'Islam', 'age'=>'16', 'hobby'=>'Membaca Dan Menonton'],
            ['name'=>'Fitria Amelia', 'bornDate'=>'2005-01-15', 'gender'=>'Perempuan', 'address'=>'Sadang Pesantren', 'religion'=>'Islam', 'age'=>'16', 'hobby'=>'Membaca Buku'],
            ['name'=>'Dina Amelia', 'bornDate'=>'2005-01-15', 'gender'=>'Perempuan', 'address'=>'BB Nugraha', 'religion'=>'Islam', 'age'=>'16', 'hobby'=>'Membaca Komik'],
            ['name'=>'Muhammad Ali Imran', 'bornDate'=>'2005-01-15', 'gender'=>'Laki-laki', 'address'=>'Palasari', 'religion'=>'Islam', 'age'=>'16', 'hobby'=>'Menonton'],
            ['name'=>'Adbullah Ravile', 'bornDate'=>'2005-01-15', 'gender'=>'Laki-laki', 'address'=>'Sayati', 'religion'=>'Islam', 'age'=>'16', 'hobby'=>'Baperin Anak Orang']
            ];
            // masukkan data ke database
            DB::table('biodatas')->insert($biodatas);
    }
}
