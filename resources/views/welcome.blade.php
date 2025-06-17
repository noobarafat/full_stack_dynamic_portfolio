<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Navbar</title>
  <link rel="stylesheet" href="{{asset('style/hg.png')}}">
</head>
<style>
.logo{
    color:red;
}

    .navbar{
        display:flex;
        align-items: center; 
        justify-content: space-between;
        padding: 20px;
        background-color:rgb(173, 162, 243);
        padding-left: 150px;

    }

    .navbar ul{
        display:flex;
        gap:40px;
        list-style-type: none;
        padding-right:250px;
    }

    .navbar ul li a{
         text-decoration: none;
    }

    .banner{
        
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-right: 40px;
        background-color:#f8f8f8;
    }

    .banner_text{
        padding-left: 150px;
        text-align:center;
    }

    button{
        padding:10px 15px;
        font-size: 20px;
        background-color:green;
        color:black;
        border-radius: 15px;
        
    }

    .banner_img{
        width: 920px;      
        height: auto;      
        object-fit: cover;  
  
    }
</style>
<body>

  <nav class="navbar">

    <h2 class="logo">ARAFAT</h2>
    <ul class="nav-links navbar">
      <li><a href="#" >Home</a></li>
      <li><a href="#" >About Me</a></li>
      <li><a href="#" >Services</a></li>
      <li><a href="#" >Contact</a></li>
      <li><a href="#" >Money</a></li>
      <li><a href="#" >Honey</a></li>
    </ul>
  </nav>
    
<div class="banner">
    <div class="banner_text">
        <H1>K. M. Arafat Islam</H1>
        <h3>Expert in Nothing</h3>
        <button>Book a Free Call</button>
        <h1>Check</h1>
    </div>
    <div >
        <img class="banner_img" src="{{asset('assets/hg.png')}}" alt="">
    </div>
</div>
<div class="center-element">
    <div class="changed"></div>
    <img src="https://www.earthna.qa/sites/default/files/styles/summit_speakers/public/speakers/images/2025-03/M%20Yunus.jpeg?itok=GN6uMv0_" alt="">
    <button>
    Click to change text
    </button>
</div>

<script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>
