<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderproduct extends Model
{
    protected $table = 'order_product';

    protected $fillable = [
        'order_id', 'product_id',
    ];

    //protected $primaryKey = 'product_id';
}
