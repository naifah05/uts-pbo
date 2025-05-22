<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::insert([
            [
                'nama' => 'Laptop ASUS',
                'stok' => 10,
                'category_id' => 1,
                'pemasok_id' => 2,
            ],
            [
                'nama' => 'Kaos Polo',
                'stok' => 24,
                'category_id' => 2,
                'pemasok_id' => 1,
            ]
            ]);
    }
}
