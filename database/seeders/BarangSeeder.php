<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
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
            ['nama' => 'Sabun Colek','varian' => 'Kecil','harga_beli' => '4800','harga_jual' => '5000'],
            ['nama' => 'Sunlight','varian' => 'Besar','harga_beli' => '4700','harga_jual' => '5000'],
            ['nama' => 'Rinso','varian' => 'Kecil','harga_beli' => '1800','harga_jual' => '2000'],
            ['nama' => 'Lifeboy','varian' => 'Cair','harga_beli' => '11400','harga_jual' => '12000'],
            ['nama' => 'Giv','varian' => 'batang','harga_beli' => '2300','harga_jual' => '3000']

        ];
        DB::table('barang')->insert($data);
    }
}
