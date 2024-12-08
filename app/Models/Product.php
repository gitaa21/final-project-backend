<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'imageLink', 'category_id', 'brand_id', 'price', 'stock'];
    use HasFactory;
}
