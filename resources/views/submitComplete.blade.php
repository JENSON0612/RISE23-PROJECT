@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/submitComplete.css')}}">
<div class="completeContent">
    <span>Thank you for contacting us!</span>
    <a href="{{route('contactUs')}}">Back</a>
</div>
@endsection