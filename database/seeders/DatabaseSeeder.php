<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Schema;

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
        DB::table('news')->truncate();

        for ($i=1; $i <= 5; $i++) {
            DB::table('news')->insert([
                'slug' => 'ini-berita-ke-'.$i,
                'title' => 'Ini berita ke-'.$i,
                'content' => 'Ini adalah isi berita dari berita ke-'.$i
            ]);
        }
    }
}
