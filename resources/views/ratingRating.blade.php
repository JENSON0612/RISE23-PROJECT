@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/ratingRating.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

<div class="ratingShowContainer">
<div class="ratingShowContent">
	<img src="{{asset('images/darkShadow.jpeg')}}" alt="">
	<h5 class="ratingContentWord">Dark Shadow
	<p>Have rated your profile!</p>
	</h5>
	<div class="ratingLogo">
	<i class="bi bi-star"></i>
	</div>
</div>
<div class="ratingShowContent">
	<img src="{{asset('images/shadowLord.jpeg')}}" alt="">
	<h5 class="ratingContentWord">Shadow Lord
	<p>Have rated your profile!</p>
	</h5>
	<div class="ratingLogo2">
	<i class="bi bi-star"></i>
	</div>
</div>
<div class="ratingShowContent">
	<img src="{{asset('images/darkShadow.jpeg')}}" alt="">
	<h5 class="ratingContentWord">Shadow Lord
	<p>Have rated your profile!</p>
	</h5>
	<div class="ratingLogo2">
	<i class="bi bi-star"></i>
	</div>
</div>
<div class="ratingShowContent">
	<img src="{{asset('images/shadowLord.jpeg')}}" alt="">
	<h5 class="ratingContentWord">Shadow Lord
	<p>Have rated your profile!</p>
	</h5>
	<div class="ratingLogo2">
	<i class="bi bi-star"></i>
	</div>
</div>
<div class="ratingShowContent">
	<img src="{{asset('images/EZ logo.png')}}" alt="">
	<h5 class="ratingContentWord">Dark Shadow
	<p>Have rated your profile!</p>
	</h5>
	<div class="ratingLogo3">
	<i class="bi bi-star"></i>
	</div>
	</div>
</div><br>
<div></div>
<div class="ratingReturnBtn">
	<a href="{{route('rating')}}"></a>
	</div>

@endsection