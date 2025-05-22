<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pemasok;

class PemasokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pemasok::insert([
            ['nama' => 'CV Sumber Makmur', 'kontak' => '081377129631'],
            ['nama' => 'PT Elektrindo', 'kontak' => '081112140765'],
        ]);
    }
}
