<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Orange', 'cost' => 50000000, 'amount' => 27]);
        Product::create(['name' => 'Banana', 'cost' => 7000000, 'amount' => 17]);
        Product::create(['name' => 'Bread', 'cost' => 12000000, 'amount' => 0]);
    }
}
