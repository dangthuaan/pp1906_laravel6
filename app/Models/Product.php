<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'author', 'publisher', 'publish_date', 'language', 'price'];

    protected $casts = [
    'publish_date' => 'date:yyyy-mm-dd'
	];

}
