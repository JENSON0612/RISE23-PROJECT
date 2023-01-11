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

class bungalowController extends Controller
{
    public function bungalow(){
        $bungalow=Property::all()->where( 'type', value("Bungalow"));
        return view('bungalow')->with('properties', $bungalow);

    }
}
