<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Property;

class adminController extends Controller
{
    public function adminData(){
        $data = Property::all();
        return view ('adminHome')->with('properties', $data);
        
    }

    public function admin(){
        return view('admin');
    }

    public function adminHome(){
        return view('adminHome');
    }

    public function adminUserData(){
        return view('adminUserData');
    }

    public function adminPropertyData(){
        return view('adminPropertyData');
    }
}
