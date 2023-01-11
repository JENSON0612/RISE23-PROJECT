@extends('layout')
@section('content')

<link rel="stylesheet" href="{{asset('css/propertiesContent.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"rel="stylesheet">
<script type="text/javascript" src="js/propertiesContent.js"></script>

@foreach($properties as $property)
                   

<form action="{{route('dangaBay')}}" method="post" enctype="multipart/form-data" style="display: inline" class="" id="addFavourite">     @csrf
<div class="propertiesContentContainer">
    <div class="propertiesInContent">
        
        <article class="propertyInContent">
            
        <img src="{{asset('images')}}/{{$property->propertyPic}}" alt="" class="img-fluid">
        <input type="hidden" name="propertyPic" value="{{asset('images')}}/{{$property->propertyPic}}"  multiple>
            <i class="bi bi-bookmark-star-fill" id="bookmarkBtn" onclick="bookmarkBtn()"></i>
            <h5>{{$property->type}}</h5>
            <input type="hidden" name="propertyName" value="{{$property->propertyName}}">
            <p>{{$property->area}}</p>
            <input type="hidden" name="area">
            <button onclick="propertyBtn()">Details</button>
        </article>
       
        <article class="propertyDescription" id="propertyDescription">
             
            <h5> {{$property->location}}
            <input type="hidden" name="location" value="{{$property->location}}">
            
            <button class="bookNow"function="addToFavourite" type="submit"></button></h5>
            
            
            <button href='favourite' class="bi bi-bookmark-star-fill" id="bookmarkBtnInside" onclick="bookmarkBtnInside()" function="addToFavourite" type="submit"></button></h5>
            <p class="roomContentDivider">{{$property->type}}</p>
            <input type="hidden" name="type" value="{{$property->type}}">
            <div class="propertyPriceIcon">
            <p class="priceIconWord">Price
                 <i class="bi bi-cash-coin"></i>
            </p>
            <div class="priceContentWord">:</div>
            <p class="priceRoom">RM {{$property->price}}</p>
            <input type="hidden" name="price" value="{{$property->price}}">
            </div>
            <div class="propertyRoomIcon">
            <p class="roomIconWord">Bedroom
                <i class="bi bi-house-door-fill"></i>
            </p>
            <div class="roomContentWord">:</div>
            <p class="roomRoom">{{$property->bedroom}}</p>
            <input type="hidden" name="bedroom" value="{{$property->bedroom}}">
            </div>
            <div class="propertyBathroomIcon">
            <p class="bathroomIconWord">Bathroom
                <i class="bi bi-door-closed-fill"></i>
            </p>
            <div class="bathroomContentWord">:</div>
            <p class="bathroomRoom">{{$property->washroom}}</p>
            <input type="hidden" name="washroom" value="{{$property->washroom}}">
            </div>
            <div class="propertySqftIcon">
            <p class="sqftIconWord">SQFT
            <i class="bi bi-house-fill"></i>
            </p>
            <div class="sqftContentWord">:</div>
            <p class="sqftHouse">{{$property->size}}</p>
            <input type="hidden" name="size" value="{{$property->size}}">
            </div>
            <div class="propertyDirectionIcon">
            <p class="directionIconWord">Direction
            <i class="bi bi-compass-fill"></i>
            </p>
            <div class="directionContentWord">:</div>
            <p class="directionHouse">{{$property->facingDirection}}</p>
            <input type="hidden" name="facingDirection" value="{{$property->facingDirection}}">
            </div>
            <div class="contentDivider"></div>
            <div class="profilePic"> 
            <p class="userName">Name</p>
            <img class="profile-img" src="https://images.unsplash.com/photo-1600353068440-6361ef3a86e8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="profilePicture">
            <div class="star">
            <i class="bi bi-star" id="star1" value="1" onclick="starBtn()"></i>
            <i class="bi bi-star" id="star2" value="2" onclick="starBtn2()"></i>
            <i class="bi bi-star" id="star3" value="3" onclick="starBtn3()"></i>
            <i class="bi bi-star" id="star4" value="4" onclick="starBtn4()"></i>
            <i class="bi bi-star" id="star5" value="5" onclick="starBtn5()"></i>
            <button class="rate" type="submit">Rate</button>
            </div>
            
            </img>
            </div>
        </article>
        
</div>
</div>
</form>

<script src="{{asset('js/propertiesContent  ')}}"></script>


@endforeach


@endsection