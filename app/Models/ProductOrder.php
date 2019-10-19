<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    protected $fillable = [
		'order_id',
		'product_id',
		'quantity',
		'price'
	];

    public function orders()
    {
        return $this->belongsToMany('App\Models\Order');
    }
}
