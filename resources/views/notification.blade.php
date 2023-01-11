@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/notification.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

<div class="notificationContainer">
    <a href="{{route('ratingRating')}}">
    <div class="notificationContent">
	    <img src="{{asset('images/shadowLord.jpeg')}}" alt="">
        
	    <h5 class="notificationContentWord">Shadow Lord
	        <p>Have rated your profile!</p>
	    </h5>
        
	    <div class="notificationRatingLogo">
	        <i class="bi bi-star-fill"></i>
	    </div>
    </div>
    </a>
    <a href="{{route('ratingAppointment')}}">
    <div class="notificationContent2">
	    <img src="{{asset('images/darkShadow.jpeg')}}" alt="">
	    <h5 class="notificationContentWord">Shadow Lord
	        <p>booked an appointment!</p>
	    </h5>
	    <div class="notificationRatingLogo2">
	        <i class="bi bi-calendar2-plus-fill"></i>
	    </div>
    </div>
    </a>
    <a href="{{route('ratingRating')}}">
    <div class="notificationContent3">
	    <img src="{{asset('images/shadowLord.jpeg')}}" alt="">
        
	    <h5 class="notificationContentWord">Shadow Lord
	        <p>uploaded a new property!</p>
	    </h5>
       
	    <div class="notificationRatingLogo3">
	      <i class="bi bi-building-fill-up"></i>
	    </div>
    </div>
    </a>
    <a href="{{route('chat')}}">
    <div class="notificationContent4">
	    <img src="{{asset('images/darkShadow.jpeg')}}" alt="">
        
	    <h5 class="notificationContentWord">Shadow Lord
	        <p>send you a message!</p>
	    </h5>
        
	    <div class="notificationRatingLogo4">
	      <i class="bi bi-chat-dots-fill"></i>
	    </div>
    </div>
    </a>
</div>
<a href="{{route('welcome')}}">
 <div class="notificationReturn">
 </div>
 </a>
@endsection