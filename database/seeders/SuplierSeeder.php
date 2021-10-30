<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuplierSeeder extends Seeder
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
            ['nama' => 'Aisha Arista Widya','Alamat' => 'Kp.Ujung Berung No.49','kode_pos' => '192381','kota' =>'Bogor'],
            ['nama' => 'Rizky Nurahman','Alamat' => 'Bojong Malaka Indah','kode_pos' => '192381','kota' =>'Bandung'],
            ['nama' => 'Muhammad Rizky Say Afif','Alamat' => 'Kp.Bojong Citepus','kode_pos' => '129832','kota' =>'Bandung'],
            ['nama' => 'Suci Apriani','Alamat' => 'Kp.Citepus','kode_pos' => '123082','kota' =>'Bandung'],
            ['nama' => 'Wildan Nursalim','Alamat' => 'Kp.Cibeug Hilir','kode_pos' => '892012','kota' =>'Bandung']
        ];
        DB::table('suplier')->insert($data);
    }
}
