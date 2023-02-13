<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = [
		'category',
		'subcategory_name',
		'slug',
		'subcategory_image',
		'view_priority',
    ];

    public function categoryData(){
    	return $this->belongsTo(Category::class,'category','slug');
    }
}
