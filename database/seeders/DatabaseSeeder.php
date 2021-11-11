<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

        Schema::disableForeignKeyConstraints();

        DB::table('users')->truncate();
        DB::table('phones')->truncate();
        DB::table('news')->truncate();

        DB::table('users')->insert([
            'name' => 'Muhammad Alkaff',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make(12345678),
        ]);

        DB::table('categories')->insert([
            'name' => 'Internasional'
        ]);

        DB::table('categories')->insert([
            'name' => 'Nasional'
        ]);

        DB::table('categories')->insert([
            'name' => 'Olahraga'
        ]);

        for ($i=1; $i <= 100; $i++) {
            DB::table('news')->insert([
                'category_id' => random_int(1,3),
                'slug' => $faker->slug,
                'title' => ucwords($faker->sentence),
                'content' => $faker->paragraph(5),
                'image' => $faker->imageUrl(),
                'created_at' => $faker->dateTimeThisMonth(),
                'updated_at' => $faker->dateTimeThisMonth(),
            ]);
        }

        for ($i=0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'username' => Str::lower(Str::random(5)),
                'email' => $faker->email,
                'password' => Hash::make(12345),
            ]);

            DB::table('phones')->insert([
                'user_id' => $i+2,
                'number' => $faker->e164PhoneNumber,
            ]);
        }

        Schema::enableForeignKeyConstraints();

    }
}
