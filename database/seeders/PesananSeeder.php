<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesananSeeder extends Seeder
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
            ['nama_pelanggan' => 'Ruslan Ramdani','nama_barang' => 'Sabun Colek','qty' => 80,'tanggal_pesan' => '2021-11-16'],
            ['nama_pelanggan' => 'Azhar Rizky Aulia','nama_barang' => 'Sunlight','qty' => 90,'tanggal_pesan' => '2021-10-14'],
            ['nama_pelanggan' => 'Aziz Tubagus Taufiq Hirzi','nama_barang' => 'Rinso','qty' => 100,'tanggal_pesan' => '2021-09-13'],
            ['nama_pelanggan' => 'Rico Achamd Febyawan','nama_barang' => 'Lifeboy','qty' => 110,'tanggal_pesan' => '2021-08-12'],
            ['nama_pelanggan' => 'Sultan Darryl Dzulfikar','nama_barang' => 'Giv','qty' => 120,'tanggal_pesan' => '2021-07-11']
        ];
        DB::table('pesanan')->insert($data);
    }
}
