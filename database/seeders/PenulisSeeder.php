<?php

namespace Database\Seeders;

use App\Models\Penulis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PenulisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 3; $i++) {
            Penulis::create([
                'Nama' => $faker->name,
                'Spesialisasi' => $faker->jobTitle
            ]);
        }
    }
}
