<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(Posts::class);
        $this->call(BiodatasTableSeeder::class);
        $this->call(BarangTableSeeder::class);
        $this->call(PembeliTableSeeder::class);
        $this->call(SuplierTableSeeder::class);
        $this->call(PembelianTableSeeder::class);
        $this->call(PesananTableSeeder::class);
    }
}
