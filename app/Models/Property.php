<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable=[
        
        
        'propertyName',   
        'type' ,
        'location',
        'district',
        'area',
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

    

    public function favourite(){
        return $this->belongsTo('App\Models\favourite');   
    }

    

    
}
