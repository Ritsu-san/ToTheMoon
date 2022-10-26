<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destination extends Model
{
 
    protected $fillable = [
        'destination',
        'mainimg',
        'video',
        'price',
        'foodimg1',
        'foodimg2',
        'foodimg3',
        'tourspots1',
        'tourspots2',
        'tourspots3',
        'fooddescription',
        'description'
    ];

    public $timestamps = false;
}
