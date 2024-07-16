<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [ // duoc tuong tac vao nhung truong gi
        'name',
        'price',
        'description',
        'category_id',
    ];
}
