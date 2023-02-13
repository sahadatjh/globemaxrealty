<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    use HasFactory;

    protected $fillable = [
    	'image',
    	'name',
		'designation',
		'description',
		'slug',
		'phone_1',
		'phone_2',
		'email_1',
		'email_2',
		'facebook',
		'google',
		'instagram',
		'skype',
		'linkedin',
		'youtube',
		'status',
    ];
}
