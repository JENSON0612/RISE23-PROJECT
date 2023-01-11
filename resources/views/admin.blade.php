<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <title>EZ</title>
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>


<body>
  <div class="video-bg">
 <video width="320" height="240" autoplay loop muted>
  <source src="{{asset('video/background video.mp4')}}" type="video/mp4">
Your browser does not support the video tag.
</video>
</div>
<div class="dark-light">
    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
     <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" /></svg>
   </div>
<div class="app">
 <div class="header">
  <div class="menu-logo"></div>
  <p class="adminLogo">EZ ADMIN</p>
  <div class="header-menu">
   <a class="menu-link layoutHome" href="{{route('adminHome')}}" onclick="topMenu()">Home</a>
   <a class="menu-link layoutContactUs" href="{{route('adminUserData')}}" onclick="topMenu()">User data</a>
   <a class="menu-link layoutAboutUs" href="{{route('adminPropertyData')}}" onclick="topMenu()">Property Data</a>
   
  </div>
  <a class="logout" href="#" >logout</a>
  <div class="header-profile">
 </div>
 </div>
 <div class="wrapper">
  
  <div class="main-container">
   <div class="content-wrapper">
    <div class="content-section"></div>
    @yield('content')
    </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 <div class="overlay-app"></div>
</div>
</body>
<script type="text/javascript" src="js/admin.js"></script>
</html>