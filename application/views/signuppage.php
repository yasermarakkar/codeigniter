
 <!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>shopOholic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
  .slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  }
  .text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  }
  .numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
  }
  .dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

  .jumbotron {
      
      background-image: url('http://localhost/session/assets/img/shoppingbag.jpg');
      padding: 100px 25px;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo {
      font-size: 200px;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  .signin{
      color: red;
  }
  }
  </style>
</head>
<body>


<div class="container">
                  
  <ul class="nav nav-tabs" role="tablist">
    <li><a href="#">Deals</a></li>
    <li><a href="#">Sell</a></li>
    <li><a href="#">Help & Contact</a></li>
    <li><a href="#">Track My Order</a></li> 
    <li><a href="#">My App</a></li>
    <li><a href="#">My PaisaPay</a></li>
    <li><a href="#" class="glyphicon glyphicon-bell"></a></li>
    <li><a href="#" class="glyphicon glyphicon-shopping-cart"></a></li>  
    <ul>
      <li><a href="login" class="signin">Sign In</a></li>
    </ul>
  </ul>
</div>

<div class="jumbotron text-center">

    

  <h1 style="color: #fff;" class="glyphicon glyphicon-shopping-cart">shopOholic</h1> 
  <p style="color: #fff;">shop the moment!.</p><br><br><br>
  <div>


      <form  action="http://localhost/session/index.php/SessionController/signup" method="post">
          <label style="color: #fff;">name</label>
          <input type="text" size="20" name="username" placeholder="username"   required>
          <label style="color:#fff;">password</label>
          <input type="password" name="password" placeholder="password" required>

  
          <input type="submit" value="signup" style="margin-top: 20px"> 
        
  
      </form>
  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="http://2.bp.blogspot.com/-X2Mju-1KUe4/VSPgjHR67aI/AAAAAAAAAzA/mXdL21YwoUQ/s1600/online-shopping.jpg" style="height: 400px;width: 100%">
  </div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://heropollsapp.appspot.com/img/shopping.jpg" style="height: 400px;width: 100%">
  </div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://ak4.picdn.net/shutterstock/videos/2669894/thumb/1.jpg?i10c=img.resize(height:160)" style="height: 400px;width: 100%">
  </div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>




</body>
</html>
