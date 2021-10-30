<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
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
            ['title' => 'Karina Over Power','content' => 'Lorem ipsum'],
            ['title' => 'Cara agar kamu tidak beban','content' => 'Lorem inpsum'],
            ['title' => '5 Langkah tidak jadi beban keluarga', 'content' => 'Lorem ipsum']

        ];
        DB::table('posts')->insert($data);
    }
}
