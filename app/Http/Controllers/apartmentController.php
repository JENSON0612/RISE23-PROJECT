<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Property;
use App\Models\favourite;
use App\Models\Feedback;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use mysqli;

class apartmentController extends Controller
{
    public function apartment(){
        $apartment=Property::all()->where( 'type', value("Apartment"));
        return view('apartment')->with('properties', $apartment);

    }

}
