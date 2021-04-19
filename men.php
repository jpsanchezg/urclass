<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<title>Class:user</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon -->
<link rel="shortcut icon" type="image/icon" href="img/logo2.png"/>

<!-- CSS
================================================== -->
<!-- Bootstrap css file-->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Font awesome css file-->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- Superslide css file-->
<link rel="stylesheet" href="css/superslides.css">
<!-- Slick slider css file -->
<link href="css/slick.css" rel="stylesheet">
<!-- Circle counter cdn css file -->
<link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>
<!-- smooth animate css file -->
<link rel="stylesheet" href="css/animate.css">
<!-- preloader --><!-- gallery slider css -->
<!-- Default Theme css file -->
<link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
<!-- Main structure css file -->
<link href="style.css" rel="stylesheet">

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/icon" href="img/logo2.png"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://file.myfontastic.com/Mp4NVuvHDkeunoNV4ryqPY/icons.css" rel="stylesheet">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">

  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">URCLASS</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="img/facebook-avatar.jpg" class="w3-circle w3-margin-right" style="width:86px">
    </div>
    <div class="w3-col s8 w3-bar">
      <ul class="nav navbar-nav navbar-right">
                     <?php
     if(isset($_SESSION['username']) && !empty($_SESSION['username']) ){
        //if(1){
         ?>
         <style>
         #signupID
         {
             display:none;
         }
         #loginID
         {
             display:none;
         }
         </style>
        <?php } else{ ?>
        <style>
         #signoutID
         {
             display:none;
         }
         </style>
         <?php } //else end of if(isset($_SESSION['user_name'])....?>
                         <li>
                            <a class="page-scroll" href="">Bienvenido :
                            <?php
             if(isset($_SESSION["username"]) &&!empty($_SESSION["username"]))
                                echo $_SESSION["username"];
                            ?>
                            </a>
                        </li>
                     <li>
                            <a class="page-scroll" id="signoutID" href="signout.php">
    <span class="fa fa-sign-out"></span> Cerrar Sesion</a>
                        </li>
                    </ul>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Menu</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="usuario.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Panel de Control</a>
    <a href="cursos.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i> Mis Cursos</a>
    <a href="event.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  Eventos</a>
    <a href="general.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  General</a>
    <a href="banco.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  Banco de Tiempo</a>
  </div>
</nav>



<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
<section id="errorpage">
  <div class="container">
    <div class="error_page_content">
         <h1>404</h1>
         <h2>Sorry :(</h2>
         <h3>Esta pagina esta en Mantenimiento.</h3>
         <p class="wow fadeInLeftBig animated" style="visibility: visible; animation-name: fadeInLeftBig;">Por favor, continua en el <a href="usuario.php">HOME</a></p>
       </div>
  </div>
</section>
</div>
</div>
