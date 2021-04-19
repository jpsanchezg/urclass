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
<title>Class:Cursos</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
                            <a class="page-scroll" href="">
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
    <a href="usuario.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Panel de Control</a>
    <a href="cursos.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-eye fa-fw"></i> Mis Cursos</a>
    <a href="event.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  Eventos</a>
    <a href="general.html" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  General</a>
    <a href="banco.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  Banco de Tiempo</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Mi Panel de Control</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <a href="men.php"><div class="w3-quarter"></a>
    <div class="w3-container w3-red w3-padding-16">

      <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>10</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Mensajes</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="icon-eye w3-xxlarge"></i></div>
        <div class="w3-right">
          <h3>12</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Tareas y Proyectos</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="icon-connectdevelop w3-xxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Compartido</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="icon-book w3-xxlarge"></i></div>
        <div class="w3-right">
          <h3>10</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Pendientes</h4>
      </div>
    </div>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-twothird">
        <h5>clases que he tomado</h5>
        <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
          <tr>
            <td><i class=" w3-text-blue w3-large"></i></td>
            <th>Curso</th>

          </tr>
          <tr>
            <td><a href="itroqui.php"><i class="icon-book w3-text-red w3-large"></i></a></td>
            <td>Clase de Introduccion a la Quimica</td>

          </tr>
          <tr>
            <td><a href="cuquibas.php"<i class="icon-book w3-text-yellow w3-large"></i></td>
            <td>Clase de Quimica Basica</td>

          </tr>
          <tr>
            <td><a href="iterqui.php"><i class="icon-book w3-text-black w3-large"></i></a></td>
            <td>Clase de Quimica Intermedia</td>

          </tr>
          <tr>
            <td><a href="avaqui.php"><i class="icon-book w3-text-blue w3-large"></i></a></td>
            <td>Clase de Quimica Avanzada </td>

          </tr>
          <tr>
            <td><a href="extqui.php"><i class="icon-book w3-text-green w3-large"></i></a></td>
            <td>Curso Extra</td>

          </tr>
        </table>
      </div>
    </div>
  </div>
  <hr>

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <p>Diseñada por <a href="#" target="_blank">Juan Pablo Sanchez Gaitan</a></p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
