<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dummy extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'productCode',
        'productName',
        'productLine',
        'productScale',
        'productVendor',
        'productDescription',
        'quantityInStock',
        'buyPrice',
        'MSRP',
    ];
}
