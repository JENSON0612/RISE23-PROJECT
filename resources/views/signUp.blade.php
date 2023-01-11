<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/signUp.css')}}">
    
    <title>EZ</title>
</head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

<body>
  <form action="{{route('signUp')}}" method="post" enctype="multipart/form-data"><br><br> @csrf
  <div class="video-bg">
 <video width="320" height="240" autoplay loop muted>
  <source src="{{asset('video/background video.mp4')}}" type="video/mp4">
Your browser does not support the video tag.
</video>
</div>
<div class="dark-light">
    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
     <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" /></svg>
   </div><br><br><br>

<div class="form sign-in">
  <div class="menu-link-main"></div>
    <h2>Welcome to EZ</h2>
    <label>
      <span>Email</span>
      <input type="email" name="email" />
    </label>
    <label>
    <span>Phone Number</span>
    <input type="phoneNo" name="email">
    </label>
    <label>
      <span>Password</span>
      <input type="password" name="password" />
    </label>
    <label>
        <span>Re-enter Password</span>
        <input type="password" name="confirm_password">
    </label>

    <a href="{{route('login')}}"><p link rel="stylesheet" class="signUp">Have an existing accont ?</p></a>
    <button type="submit" class="submit">Sign Up</button>
    <button type="button" class="fb-btn , fa fa-facebook">&nbsp; Connect with <span>&nbsp;Facebook</span></button>
    <br><button type="button" class="gg-btn , fa fa-google" src="">&nbsp;Connect with <span>&nbsp;Google</span></button>
  </div>



 </div>
</div>
</form> 
</body>
<script type="text/javascript" src="{{asset('js/layout.js')}}"></script>
</html>