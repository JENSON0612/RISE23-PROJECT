<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appointment;


class appointmentController extends Controller
{
       
    public function index(){
        $r = request();
        return view ('appointment');
    }
        
}
