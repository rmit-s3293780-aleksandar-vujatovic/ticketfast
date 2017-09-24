<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
  
<head> 
	 
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit=no">
	


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
  <div class="navbar-brand">
    <img id="logo" src="favicon.jpg">
  </div>
  </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="eventListAdmin.php"><span class="navedit">Event List</span></a></li>
        <li><a href="addEvent.php"><span class="navedit">Add Event</span></a></li>
      </ul>

    <div class="loggedIn" id="loggedIn">

      
<div class="btn-group navbar-form navbar-right">
  <button type="button" class="btn btn-primary"><?= $_SESSION['username']?></button>
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="signOut.php">Sign out</a></li>
  </ul>
</div>
      
    </div>
    
    
    </div>
  </div>
  </nav>
    
  <div id ="title">
    <img id="logo2" src="favicon2.jpg"/>
  </div>
  
  
  
  </body>
  
  <style>
    .fp{
      inline-size: -webkit-fill-available;
      text-align: right;
      padding-right: 4.8%;
    }
    </style>