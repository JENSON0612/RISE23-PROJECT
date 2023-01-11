<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class garage extends Model
{
    use HasFactory;
    protected $fillable=['propertyID', 'startDate','endDate', 'propertyName', 'propertyPic', 'rating' , 'favourite'];

    public function User(){
        return $this->hasOne('App\Models\User');   
    }

    public function Property(){
        return $this->hasMany('App\Models\Property');   
    }

    




    
}
