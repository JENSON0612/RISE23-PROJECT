@extends('layout')
@section('content')



<link rel="stylesheet" href="{{asset('css/ratingPublishProperties.css')}}">

<div class="tiles">
					@foreach ($properties as $property)
					<article class="tile">
					<img src="{{asset('images')}}/{{$property->propertyPic}}" alt="">
						<div class="tile-header">
							<h3>
								<span>{{$property->propertyName}}</span>
								<span>{{$property->publishFunction}}</span>
							</h3>
						</div>
						<a href="#">
							<span>More Info</span>
							<span class="favouriteIcon-btn">
								<i class="ph-caret-right-bold"></i>
							</span>
						</a>
					</article>
					@endforeach
</div>
<a href="{{route('rating')}}">
<div class="publishReturn">
</div>
</a>
@endsection