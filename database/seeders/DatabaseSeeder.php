<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Buku;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Buku::create([
            'nama' => Str::random(10),
            'harga' => 90000,
            'tglMasuk' => '10-10-2022',
            'thnTerbit' => '2020',
            'kategori' => 'sedih',
            'image' => 'product-item1.jpg'
        ]);
    }
}
