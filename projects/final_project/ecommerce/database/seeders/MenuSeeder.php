<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                'name' => 'Home',
                'slug' => 'home',
                'parent_id' => null,
            ],
            [
                'name' => 'About',
                'slug' => 'about',
                'parent_id' => null,
            ],
            [
                'name' => 'Services',
                'slug' => 'services',
                'parent_id' => null,
            ],
            [
                'name' => 'Contact',
                'slug' => 'contact',
                'parent_id' => null,
            ],
            [
                'name' => 'Our Team',
                'slug' => 'our-team',
                'parent_id' => null,
            ]

            ];

            Menu::insert($menus);
    }
}
