<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
    	'tax',
    	'inside_dhaka_charge',
    	'outside_dhaka_charge',
    	'india_charge',
    	'outside_bd_charge',
    ];
}
