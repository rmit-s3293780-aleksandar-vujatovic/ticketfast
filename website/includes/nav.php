<!DOCTYPE html>
<html lang="en">
  
<head> 
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	
	<link rel="shortcut icon" href="/favicon.jpg"/>
	<link href="bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">	
	<link rel="stylesheet" media="screen and (max-width: 767.5px)" href="navcollapse.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
	<!-- responsive navbar for mobiles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  <a class="navbar-brand" rel="home" href="index.php">
    <img id="logo" src="favicon.jpg">
  </a>
  </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><span class="navedit" id="home">Home</span></a></li>
        <li><a href="register.php"><span class="navedit">Register</span></a></li>
        <li><a href="aboutUs.php"><span class="navedit">About Us</span></a></li>
        <li><a href="faq.php"><span class="navedit">FAQ</span></a></li>
        <li><a href="contactUs.php"><span class="navedit">Contact Us</span></a></li>
      </ul>
      
    <form class="navbar-form navbar-right" role="search" method="post">
      <div class="form-group">
          <input type="text" class="form-control" name="username" placeholder="Username">
      </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
      <button type="submit" class="btn btn-default">Sign In</button>
    </form>
    </div>
  </div>
  </nav>
    
  <div id ="title">
    <img id="logo2" src="favicon2.jpg"/>
  </div>