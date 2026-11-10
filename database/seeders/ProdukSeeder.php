<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produk = [
            ['nama' => 'Laptop', 'harga' => 8000000, 'stok' => 10],
            ['nama' => 'Mouse', 'harga' => 50000, 'stok' => 50],
            ['nama' => 'Keyboard', 'harga' => 150000, 'stok' => 30],
            ['nama' => 'Monitor', 'harga' => 1500000, 'stok' => 15],
            ['nama' => 'Headset', 'harga' => 250000, 'stok' => 20],
        ];

        foreach ($produk as $item) {
            Produk::create($item);
        }
    }
}
