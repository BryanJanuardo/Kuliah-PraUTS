<?php

namespace Database\Seeders;

use App\Models\Materi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        Materi::create([
            'Nama' => 'Machine Learning',
            'Tanggal' => $faker->date(),
            'Deskripsi' => $faker->sentence(),
            'Konten' => $faker->realTextBetween(10, 50, 3),
            'kategori_id' => 1,
            'penulis_id' => $faker->numberBetween(1, 3)
        ]);
        Materi::create([
            'Nama' => 'Deep Learning',
            'Tanggal' => $faker->date(),
            'Deskripsi' => $faker->sentence(),
            'Konten' => $faker->realTextBetween(10, 50, 3),
            'kategori_id' => 1,
            'penulis_id' => $faker->numberBetween(1, 3)
        ]);
        Materi::create([
            'Nama' => 'Natural Language Processing',
            'Tanggal' => $faker->date(),
            'Deskripsi' => $faker->sentence(),
            'Konten' => $faker->realTextBetween(10, 50, 3),
            'kategori_id' => 1,
            'penulis_id' => $faker->numberBetween(1, 3)
        ]);
        Materi::create([
            'Nama' => 'Software Security',
            'Tanggal' => $faker->date(),
            'Deskripsi' => $faker->sentence(),
            'Konten' => $faker->realTextBetween(10, 50, 3),
            'kategori_id' => 2,
            'penulis_id' => $faker->numberBetween(1, 3)
        ]);
        Materi::create([
            'Nama' => 'Network Administration',
            'Tanggal' => $faker->date(),
            'Deskripsi' => $faker->sentence(),
            'Konten' => $faker->realTextBetween(10, 50, 3),
            'kategori_id' => 2,
            'penulis_id' => $faker->numberBetween(1, 3)
        ]);
        Materi::create([
            'Nama' => 'Popular Network Technology',
            'Tanggal' => $faker->date(),
            'Deskripsi' => $faker->sentence(),
            'Konten' => $faker->realTextBetween(10, 50, 3),
            'kategori_id' => 2,
            'penulis_id' => $faker->numberBetween(1, 3)
        ]);
        Materi::create([
            'Nama' => 'Human and Computer Interaction',
            'Tanggal' => $faker->date(),
            'Deskripsi' => $faker->sentence(),
            'Konten' => $faker->realTextBetween(10, 50, 3),
            'kategori_id' => 3,
            'penulis_id' => $faker->numberBetween(1, 3)
        ]);
        Materi::create([
            'Nama' => 'User Experience',
            'Tanggal' => $faker->date(),
            'Deskripsi' => $faker->sentence(),
            'Konten' => $faker->realTextBetween(10, 50, 3),
            'kategori_id' => 3,
            'penulis_id' => $faker->numberBetween(1, 3)
        ]);
        Materi::create([
            'Nama' => 'User Experience for Digital Immersive Technology',
            'Tanggal' => $faker->date(),
            'Deskripsi' => $faker->sentence(),
            'Konten' => $faker->realTextBetween(10, 50, 3),
            'kategori_id' => 3,
            'penulis_id' => $faker->numberBetween(1, 3)
        ]);

        Materi::create([
            'Nama' => ' Pattern Software Design',
            'Tanggal' => $faker->date(),
            'Deskripsi' => $faker->sentence(),
            'Konten' => $faker->realTextBetween(10, 50, 3),
            'kategori_id' => 4,
            'penulis_id' => $faker->numberBetween(1, 3)
        ]);
        Materi::create([
            'Nama' => 'Code Reengineering',
            'Tanggal' => $faker->date(),
            'Deskripsi' => $faker->sentence(),
            'Konten' => $faker->realTextBetween(10, 50, 3),
            'kategori_id' => 4,
            'penulis_id' => $faker->numberBetween(1, 3)
        ]);
        Materi::create([
            'Nama' => 'Agile Software Development',
            'Tanggal' => $faker->date(),
            'Deskripsi' => $faker->sentence(),
            'Konten' => $faker->realTextBetween(10, 50, 3),
            'kategori_id' => 4,
            'penulis_id' => $faker->numberBetween(1, 3)
        ]);
    }
}
