<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = [
		'user_id',
		'total_price',
		'description'
	];


    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }
}
