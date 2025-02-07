<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            [
                'category_name' => 'Laptop',
                'description' => 'Laptop Asus',
                'slug' => 'laptop-asus',
                'status' => 1,
            ],
            [
                'category_name' => 'Mouse',
                'description' => 'Mouse Logitech',
                'slug' => 'mouse-logitech',
                'status' => 1,
            ],
            [
                'category_name' => 'Keyboard',
                'description' => 'Keyboard Razer',
                'slug' => 'keyboard-razer',
                'status' => 1,
            ],
            [
                'category_name' => 'Monitor',
                'description' => 'Monitor LG',
                'slug' => 'monitor-lg',
                'status' => 1,
            ],
        ];

        Category::insert($categories);
    }
}
