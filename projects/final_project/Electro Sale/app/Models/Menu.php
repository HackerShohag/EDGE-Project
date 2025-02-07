<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['id', 'name', 'slug', 'parent_id'];

    public static function generateSampleData()
    {
        return [
            ['id' => 1, 'name' => 'Home', 'slug' => '/', 'parent_id' => null],
            ['id' => 2, 'name' => 'About', 'slug' => '/about', 'parent_id' => null],
            ['id' => 3, 'name' => 'Services', 'slug' => '/services', 'parent_id' => null],
            ['id' => 4, 'name' => 'Contact', 'slug' => '/contact', 'parent_id' => null],
        ];
    }
}
