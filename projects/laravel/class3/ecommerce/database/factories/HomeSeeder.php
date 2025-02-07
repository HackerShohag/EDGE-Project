<?php

namespace Database\Factories;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([
            'title' => 'Sample Home',
            'description' => 'This is a sample home description.',
            'price' => 100000,
            'location' => 'Sample Location',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}