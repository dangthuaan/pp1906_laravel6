<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'user_id',
    	'title',
    	'author',
    	'publisher',
    	'publish_date',
    	'language',
    	'price',
    ];

	public function user()
    {
        return $this->belongsTo('App\User');
    }
}
