<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    // protected $table = 'products';
    protected $fillable = [
        'product_name',
        'description',
        'price',
        'stock',
        'status',
        'image',
        // 'category_id',
        // 'user_id',
    ];


    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}