@extends('admin')
@section('content')
<link rel="stylesheet" href="{{asset('css/adminUserData.css')}}">

<div class="userWrapper">
  <canvas id='c'></canvas>
  <div class="userLabel">text</div>
</div>
<p class="dataTitle">User Registration in EZ</p>

<script src="{{asset('js/adminUserData.js')}}"></script>
@endsection