<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductRam extends BaseModel
{
    protected $table = 'products_ram';

    protected $fillable = [
        'product_id',
        'ram',
        'plus_price'
    ];
}
