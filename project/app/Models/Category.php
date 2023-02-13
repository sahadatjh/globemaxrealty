<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
		'category_name',
        'description',
		'slug',
		'category_image',
		'view_priority',
    ];

    public function subcategoryData(){
    	return $this->hasMany(Subcategory::class,'category','slug');
    }

    public function productData(){
    	return $this->hasMany(Product::class,'category','slug');
    }
}
