<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'Nama' => 'Data Science',
        ]);

        Kategori::create([
            'Nama' => 'Network Security',
        ]);

        Kategori::create([
            'Nama' => 'Interactive Multimedia',
        ]);

        Kategori::create([
            'Nama' => 'Software Engineering',
        ]);
    }
}
