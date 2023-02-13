<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
		'category',
		'subcategory',
		'product_slug',
		'property_id',
		'title',
		'label',
		'price',
		'size',
		'description',
		'map_link',
		'address',
		'city',
		'state',
		'zip',
		'country',
		'bedrooms',
		'bathrooms',
		'garage',
		'garage_size',
		'year_built',
		'property_type',
		'property_status',
		'additional_details',
		'features',
		'video',
		'contact_mail',
		'contact_info',
		'view_priority',
		'status',
    ];

    protected $casts = [
    	'video' => 'array',
    ];


    public function categoryData(){
    	return $this->belongsTo(Category::class,'category','slug');
    }

    public function subcategoryData(){
    	return $this->belongsTo(Subcategory::class,'subcategory','slug');
    }

    public function productImages(){
    	return $this->hasMany(ProductImage::class)->orderBy('default_image','desc');
    }

    public function productDefaultImage(){
        return $this->hasOne(ProductImage::class)->orderBy('default_image','desc');
	}

    public function productFloorPlans(){
        return $this->hasMany(ProductFloorPlans::class);
	}
	
}
