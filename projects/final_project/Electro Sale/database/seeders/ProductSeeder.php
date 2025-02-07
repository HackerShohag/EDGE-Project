<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $products  = [
            [
                'product_name' => 'Laptop',
                'description' => 'Laptop Asus',
                'price' => 100000000,
                'stock' => 10,
                'status' => 1,
                'image' => 'laptop.jpg',
                // 'category_id' => 1,
                // 'user_id' => 1,
            ],
            [
                'product_name' => 'Mouse',
                'description' => 'Mouse Logitech',
                'price' => 100000,
                'stock' => 50,
                'status' => 1,
                'image' => 'mouse.jpg',
                // 'category_id' => 2,
                // 'user_id' => 1,
            ],
            [
                'product_name' => 'Keyboard',
                'description' => 'Keyboard Razer',
                'price' => 200000,
                'stock' => 30,
                'status' => 1,
                'image' => 'keyboard.jpg',
                // 'category_id' => 2,
                // 'user_id' => 1,
            ],
            [
                'product_name' => 'Monitor',
                'description' => 'Monitor LG',
                'price' => 1500000,
                'stock' => 20,
                'status' => 1,
                'image' => 'monitor.jpg',
                // 'category_id' => 3,
                // 'user_id' => 1,
            ],
        ];

        Product::insert($products);
    }
}