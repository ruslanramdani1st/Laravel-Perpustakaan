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
        // Pengiriman data ke dalam table di database
        $this->call([PostsSeeder::class,BarangSeeder::class,PembelianSeeder::class,PembeliSeeder::class,PesananSeeder::class,SuplierSeeder::class]);
    }
}
