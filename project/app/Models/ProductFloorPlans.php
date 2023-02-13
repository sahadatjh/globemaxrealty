<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFloorPlans extends Model
{
    use HasFactory;

    protected $fillable = [
    	'product_id',
		'floor_title',
		'description',
		'price',
		'image',
		'info',
    ];

 //    protected $casts = [
	//     'price' => 'float',
	// ];
}
