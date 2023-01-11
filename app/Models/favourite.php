<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favourite extends Model
{
    use HasFactory;
    protected $fillable=[
        
        'propertyName',   
        'type' ,
        'location',
        'district',
        'price',
        'description',
        'publishFunction',
        'typeOfLot',
        'typeOfHold',
        'size',
        'facingDirection',
        'bedroom',
        'washroom',
        'furniture',
        'gateGuarded',
        'extension',
        'renovation', 
        'propertyPic',

    
    
    ];
}
