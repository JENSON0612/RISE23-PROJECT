@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/aboutUs.css')}}">



<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/8fe048c345.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <main class="main-grid" class="content-wrapper">
      
            <div class="head">
            <h1 class="page-title">About us</h1>
            <p class="subtitle">We are a platform that allow users to purchase and sell their properties around the world. This website allow users to chat with Agents to communicate among themselves.</p>
            </div>
            <img class="main-image" src="https://images.unsplash.com/photo-1523908511403-7fc7b25592f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60" alt="two men in a coworking space">
            
            <div class="main-text">
                <h2 class="section-title">Things about our websites</h2>
                <p>We are able to create a platform that allow seller around the world to sell their properties while placing their own price in the websites. </p>
                <p>Chat are also one of the function available for buyer to contact. They can book an appointment with the agents for viewing or to know more about the detailed information of the properties.</p>
              
  
            </div>
      
    </main>
  
    
    <footer class="footer main-grid">
      <div class="footer-text">
        <p class="end">Awesome, thank you for visiting our page! Please follow us on our social media accounts. They are linked on the right site.
         You can`t miss the icons.We deeply appreciate your cooperation.</p>
        <p class="copyright">© EZ </p>
      </div>
      <div class="social">
        <a href="#" class="facebook icon" ><i class="fab fa-facebook-f" fill="currentColor"></i></a>
        <a href="#" class="twitter icon" ><i class="fab fa-twitter" fill="currentColor"></i></a>
        <a href="#" class="instagram icon"><i class="fab fa-instagram" fill="currentColor"></i></a>
      </div>
    </footer>
  </body>
</html>







@endsection