@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/recommend.css')}}">
<h3 class="recommendTitle">RECOMMEND</h3>
<div class="recommendDivider"></div>
<div class="recommendContent">
          <article class="recommendCard">
          <img src="{{asset('images/home.jpg')}}" alt="">
            <div class="recommendCardHeader">
              <h3>
                  <span>Double Storey</span>
                  <span>House</span>
              </h3>
                <div class="recommendBtn" href="#">
                  <span>More Info</span>
                </div>
            </div>
          </article>
          <article class="recommendCard">
          <img src="{{asset('images/home.jpg')}}" alt="">
            <div class="recommendCardHeader">
              <h3>
                  <span>Double Storey</span>
                  <span>House</span>
              </h3>
                <div class="recommendBtn" href="#">
                  <span>More Info</span>
                </div>
            </div>
          </article>
          <article class="recommendCard">
          <img src="{{asset('images/home.jpg')}}" alt="">
            <div class="recommendCardHeader">
              <h3>
                  <span>Double Storey</span>
                  <span>House</span>
              </h3>
                <div class="recommendBtn" href="#">
                  <span>More Info</span>
                </div>
            </div>
          </article>
</div>
</div>

@endsection


