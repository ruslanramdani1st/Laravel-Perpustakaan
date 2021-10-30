<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat sample data daru table posts
        $data = [
            ['nama_barang' => 'Sabun Colek','nama_Suplier' => 'Aisha Arista Widya','qty' => 80,'tanggal' => '2021-11-16'],
            ['nama_barang' => 'Sunlight','nama_Suplier' => 'Rizky Nurahman','qty' => 90,'tanggal' => '2021-10-14'],
            ['nama_barang' => 'Rinso','nama_Suplier' => 'Muhammad Rizky Say Afif','qty' => 100,'tanggal' => '2021-11-13'],
            ['nama_barang' => 'Lifeboy','nama_Suplier' => 'Suci Apriani','qty' => 110,'tanggal' => '2021-11-12'],
            ['nama_barang' => 'Giv','nama_Suplier' => 'Wildan Nursalim','qty' => 120,'tanggal' => '2021-11-11'],
        ];
        DB::table('pembelian')->insert($data);
    }
}
