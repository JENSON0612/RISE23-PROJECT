@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/rating.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
<div class="ratingContainer">
<h3>Profile Rating</h3>
<div class="ratingDivider"></div>
</div>
<div class="ratingContainerContent">
	<a href="{{route('ratingPublishProperties')}}">
	<div class="ratingContent">
		<div class="ratingbtn1">
			<h5>Publish Properties</h5>
		</div>
		</a>
		<a href="{{route('ratingAppointment')}}">
		<div class="ratingbtn2">
			<h5>Appointment</h5>
		</div>
		</a>
	</div>
	<div class="ratingContent2">
	<a href="{{route('ratingRating')}}">
		<div class="ratingbtn3">
			<h5>Rating</h5>
		</div>
		</a>
		<a href="{{route('ratingBio')}}">
		<div class="ratingbtn4">
			<h5>Bio</h5>
		</a>
		</div>
	</div>
</div>

@endsection
