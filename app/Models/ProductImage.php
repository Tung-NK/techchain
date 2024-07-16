<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $table = 'product_comment';

    protected $fillable = [ // duoc tuong tac vao nhung truong gi
        'product_id',
        'image_url ',
        'image_type',
    ];
}
