<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactUs extends Model
{
    use HasFactory;
    protected $fillable=['name', 'email', 'phoneNo', 'message'];

    public function seller(){
        return $this->hasMany('App\Models\apartment');   
    }

    public function buyer(){
        return $this->hasMany('App\Models\buyer');   
    }
}
