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

class plentongController extends Controller
{

    public function toSell(){
        $view=Property::all()->where('publishFunction', value("Sell")); 
        return view('plentong')->with('properties', $view);
    }

    public function district(){
        $view=Property::all()->where('district', value("Plentong")); 
        return view('plentong')->with('properties', $view);
}


public function addToFavourite(){
    $r = request();
    $Favourite = new favourite();
   
    
      $propertyPic = array();
      $propertyPic[] = $r-> propertyPic;
      if($image = $r->file('propertyPic')){
        foreach($image as $image){
          $image -> move('propertyPic',$image->getClientOriginalName());
          $propertyPic[] = $image -> getClientOriginalName();
            }
        }  
    
    
    $addProperty=favourite::insert([
        'propertyName' => $r -> propertyName,
        'location' => $r -> location,
        'district' => $r -> district,
        'area' => $r -> area,
        'price' => $r -> price,
        'publishFunction' => $r -> publishFunction,
        'size' => $r -> size,
        'facingDirection' => $r -> facingDirection,
        'bedroom' => $r -> bedroom,
        'washroom' => $r -> washroom,
        'typeOfLot' => $r -> typeOfLot,
        'typeOfHold' => $r -> typeOfHold,
        'furniture' => $r -> furniture,
        'gateGuarded' => $r -> gateGuarded,
        'extension' => $r -> extension,
        'type' => $r -> type,
        'renovation' => $r -> renovation,
        'description' => $r -> description,
        'propertyPic' => implode('|',$propertyPic),

       
        
    ]);
    return redirect()->route('plentong')->with('properties', $Favourite);
}


}
