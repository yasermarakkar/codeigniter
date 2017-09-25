

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>shopOholic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
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
    <ul class="nav nav-tabs">
      <li><a href="signup"    class="signin"><span style="color: red;">Sign Up</span></a></li>
    </ul>
  </ul>
</div>
<div class="jumbotron text-center">

    

  <h1 style="color: #fff;" class="glyphicon glyphicon-shopping-cart">shopOholic</h1> 
  <p style="color: #000033;">shop the moment!.</p><br><br><br>
  <div>


      <form  action="login" method="post">
          <label style="color: #000033;">name</label>
          
          <input type="text" size="20" name="username" placeholder="username"  >
          <label style="color:#000033;">password</label>
          <input type="password" name="password" placeholder="password" >
  
          <input type="submit" value="signin" style="margin-top: 20px; background-color: 
   #1aa3ff; color: white;"> 
        
  
      </form>
  </div>
</div>

<!-- Container (About Section) -->


<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-qrcode"></style></span>
    </div>
    
  </div>
</div>

</body>
</html>
