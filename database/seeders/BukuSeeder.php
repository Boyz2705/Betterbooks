<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buku::create([
        //     'nama' => Str::random(10),
        //     'harga' => 90000,
        //     'tglMasuk' => '10-10-2022',
        //     'thnTerbit' => '2020',
        //     'kategori' => 'sedih',
        // ]);
    }
}
