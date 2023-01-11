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

class homeController extends Controller
{
    

    public function add(){
        
        
      
        $r = request();
        $propertyPic = array();
        if($image = $r->file('propertyPic')){
        foreach($image as $image){
          $image -> move('propertyPic',$image->getClientOriginalName());
          $propertyPic[] = $image -> getClientOriginalName();
            }
        }
    

            
    $addProperty=Property::insert([
        'propertyName' => $r -> propertyName,
        'location' => $r -> location,
        'area' => $r -> area,
        'price' => $r -> price,
        'publishFunction' => $r -> publishFunction,
        'size' => $r -> size,
        'district' => $r -> district,
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
    
    return view('addYourProperty');
}


    public function storeUserData(){
        $r= request();
        $user = new User();
        $user->email = $r->email;
        $user->password = $r->password;
        $user->confirm_password = $r->confirm_password;
        

       /* if(User::all()->where('email', $r->email)){
            echo "<script type='text/javascript'>alert('The email has been used. Kindly use another email');</script>";
            return view ('signUp');
        } */ 

        
        if($r->password != $r->confirm_password){
            echo "<script type='text/javascript'>alert('Password does not match. Please re-enter your password');</script>";
            return view ('signUp');
        }
        else{   
        $user->save();
        return view('welcome');
        }

        

    }

    public function checkUserAccount(){
        $r = request();
        $user = User::where('email',$r->email)->first();

        if($r->password2 == $user->password){
            echo "<script type='text/javascript'>alert('Sucessfully Login');</script>";
            return view ('welcome');
        }
        else{
            echo "<script type='text/javascript'>alert('Wrong password or email. Please try again');</script>";
            return view ('login');
        }
        
        
    }


    public function toRent(){
        $view=Property::all()->where('publishFunction', value("Rent"));
        return view('rent')->with('properties', $view);
    }

    public function toSell(){
        $view=Property::all()->where('publishFunction', value("Sell"));
        return view('propertiesContent')->with('properties', $view);
        
        
    }

    public function jB(){
        $view=Property::all()->where('district', value("Johor Bahru")); 
        return view('propertiesContent')->with('properties', $view);
    }

    public function showRentDetails($id){
        $view=Property::all()->where('id', $id); 
        return view('rentDetails')->with('properties', $view);
    }

    public function submitMessage(){
        $r = request();
        $fbUser = new Feedback();
        $fbUser->fbEmail = $r->fbEmail;
        $fbUser->fbPhoneNumber = $r->fbPhoneNumber;
        $fbUser->fbMessage = $r->fbMessage;
        $fbUser->fbName = $r->fbName;
        $fbUser->save();
        echo "<script type='text/javascript'>alert('Thank you for contacting Us!');</script>";

        return view ('contactUs');
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
        return redirect()->route('propertiesContent')->with('properties', $Favourite);
    }


    

        public function showPublished() {
            $view=Property::all();
        return view('ratingPublishProperties')->with('properties', $view);
        }

        public function search(){
            $r=request();
            $keyword=$r->keyword;
            $properties=DB::table('properties')->where('district', 'like', '%'.$keyword.'%')->get();
            return view('propertiesContent')->with('properties', $properties);
        }

        

        
        
        

        

       

        
    
        

    
 
        
    
    

    public function welcome(){
        return view('welcome');
    }

    public function rent(){
        return view('rent');
    }
    
    public function yourProperty(){
        return view('yourProperty');
    }

    public function addYourProperty(){
        return view ('addYourProperty');
    }

    public function addProperty(){
        return view ('addProperty');
    }

    public function signin(){
        return view('login');
    }

    public function signUp(){
        return view('signUp');
    }

    public function addBtn(){
        return view('guideForSell&Rent');
    }  

    public function contactUs(){
        return view('contactUs');
    }  

    public function submitComplete(){
        return view('submitComplete');
    }  

    public function favourite(){
        $view=favourite::all();
        return view('favourite')->with('favourites', $view);
        
    }

    public function aboutUs(){
        return view('aboutUs');
    }

    public function chat(){
        return view('chat');
    }

    public function rating(){
        return view('rating');
    }

    public function recommend(){
        return view('recommend');
    }

    public function ratingbtn1(){
        return view('ratingPublishProperties');
    }

    public function ratingbtn2(){
        return view('ratingAppointment');
    }

    public function ratingbtn3(){
        return view('ratingRating');
    }


    public function nearMe(){
        return view('nearMe');
    }

    public function ratingbtn4(){
        return view('ratingBio');
    }

    public function notification(){
        return view('notification');
    }

    public function propertiesContent(){
        return view('propertiesContent');
    }

    public function rentDetails(){
        return view('rentDetails');
    }

    public function appointment(){
        return view('appointment');
    }

    



    


    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

}