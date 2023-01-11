@extends('layout')
@section('content')


<link rel="stylesheet" href="{{asset('css/favourite.css')}}">
<h3 class="favouriteTitle">FAVOURITE</h3>

<div class="tiles">
				@foreach($favourites as $favourite)
                
					<article class="tile">
					<img src="{{$favourite->propertyPic}}" alt="img-fluid">
						<div class="tile-header">
							<h3>
								<span>{{$favourite->propertyName}}</span>
								<span>{{$favourite->type}}</span>
								<span>{{$favourite->district}}</span>
							</h3>
						</div>
						<a href="{{route('propertiesContent')}}">
							<span>More Info</span>
							<span class="favouriteIcon-btn">
								<i class="ph-caret-right-bold"></i>
							</span>
						</a>
					</article>
			
					@endforeach
	</div>
@endsection