<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Schema;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // \App\Models\User::factory(10)->create();
        DB::table('news')->truncate();

        for ($i=1; $i <= 100; $i++) {
            DB::table('news')->insert([
                'slug' => $faker->slug,
                'title' => ucwords($faker->sentence),
                'content' => $faker->paragraph(5),
                'created_at' => $faker->dateTimeThisMonth(),
                'updated_at' => $faker->dateTimeThisMonth(),
            ]);
        }
    }
}
