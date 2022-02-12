<?php

namespace Database\Seeders;

use Faker\Core\Number;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Database\Seeders\Eloquent;
use Faker\Factory as Faker;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker =  Faker::create();
        foreach (range(1, 50000) as $value) {
            DB::table('collegetable')->insert([
                'Student' => $faker->name(10),
                'Teacher' => $faker->name(10),
                'Assingment' => $faker->sentence(10),
                'Marks' => $faker->numberBetween(0, 100),
            ]);
        }
    }
}
