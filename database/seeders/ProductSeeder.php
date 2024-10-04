<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Машина', 'amount' => 1, 'price' => 10.00]);
        Product::create(['name' => 'Квартира', 'amount' => 3, 'price' => 20.00]);
        Product::create(['name' => 'Дом', 'amount' => 5, 'price' => 40.00]);
    }
}
