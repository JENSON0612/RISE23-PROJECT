<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    use HasFactory;
    protected $fillable=['user', 'message', 'phoneNo', 'email'];

    public function seller(){
        return $this->hasMany('App\Models\seller');   
    }

    public function buyer(){
        return $this->hasMany('App\Models\buyer');   
    }
}
