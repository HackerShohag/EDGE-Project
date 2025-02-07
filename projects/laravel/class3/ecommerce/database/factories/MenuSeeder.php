<?php

namespace Database\Factories;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            ['name' => 'Home', 'url' => '/home', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Shop', 'url' => '/shop', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'About', 'url' => '/about', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Contact', 'url' => '/contact', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}