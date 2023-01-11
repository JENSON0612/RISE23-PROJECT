@extends('layout')
@section('content')


 @foreach($properties as $property)
 
<div>
@php
 $image = DB::table('properties')->where('propertyPic', 1) -> first();
 $images = explode('|', $property->propertyPic);
@endphp

@foreach($images as $item)
  <img src="{{asset('images')}}/{{$property-> propertyPic}}">
  <div>{{$property->price}}</div>
  <div>{{$property->propertyName}}</div>
  <div>{{$property->location}}</div>
@endforeach



</div>


  @endforeach








@endsection