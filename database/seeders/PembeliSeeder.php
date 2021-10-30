<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembeliSeeder extends Seeder
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
            ['nama' => 'Ruslan Ramdani','jenis_kelamin' => 'Laki-Laki','Alamat' => 'Kp.Cibedug Girang','kode_pos' => '192381','kota' =>'Bandung','tanggal_lahir' =>'2003-11-16'],
            ['nama' => 'Azhar Rizky Aulia','jenis_kelamin' => 'Laki-Laki','Alamat' => 'Bojong Malaka Indah','kode_pos' => '192381','kota' =>'Bandung','tanggal_lahir' =>'2004-04-14'],
            ['nama' => 'Aziz Tugabus Taufiq Hirzi','jenis_kelamin' => 'Laki-Laki','Alamat' => 'Kp.Bojong Citepus','kode_pos' => '129832','kota' =>'Bandung','tanggal_lahir' =>'2004-10-07'],
            ['nama' => 'Rico Achmad Febyawan','jenis_kelamin' => 'Laki-Laki','Alamat' => 'Kp.Citepus','kode_pos' => '123082','kota' =>'Bandung','tanggal_lahir' =>'2003-01-09'],
            ['nama' => 'Sultan Darryl Dzulfikar','jenis_kelamin' => 'Laki-Laki','Alamat' => 'Kp.Cibeug Hilir','kode_pos' => '892012','kota' =>'Bandung','tanggal_lahir' =>'2004-07-11']
        ];
        DB::table('pembeli')->insert($data);
    }
}
