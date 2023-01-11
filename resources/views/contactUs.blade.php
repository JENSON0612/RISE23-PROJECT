@extends('layout')
@section('content')

<form action="{{route('contactUs')}}" method="post" enctype="multipart/form-data"> @csrf
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/contactUs.css')}}">

<div class="contactUsContent"> 
    <div class="cuEmail">
    <label><span> E-mail </span>
        <input type="email" name="fbEmail">
     </label>    
    </div>
    <div class="cuName">
    <label><span> Name </span>
        <input type="text" name="fbName" >
    </label>
    </div>
    <div class="cuPhoneNo">
    <label><span> Phone No</span>
        <input type="text" name="fbPhoneNumber" >
     </label>
    </div>
    <div class="cuMessage">
    <label><span> Messages</span>
        <input type="text" name="fbMessage">
     </label>
    </div>
    <div class="cuSubmitBtn">
        <a href="{{route('welcome')}}">&nbsp;Back&nbsp;</a>
        <a href="{{route('contactUs')}}" type="submit">Submit</a>
    </div>
    
    </div>
    <div class="ourLocation">
        <a href="">
        <i class="material-icons">place</i><span>Our Location</span>
        </a>
</div>
</form>


<script src="js/contactUs.js"></script>
@endsection