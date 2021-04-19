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
<title>Class:Curso</title>
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
                            <a class="page-scroll" href="settings.php">
                            <?php
             if(isset($_SESSION["username"]) &&!empty($_SESSION["username"]))
                                echo $_SESSION["username"];
                            ?>
                            </a>
                        </li>
                     <li>
                            <a class="page-scroll" id="signoutID" href="signout.php">
    <span class="fa fa-sign-out"></span> Cerrar sesion</a>
                        </li>
                    </ul>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Contenidos</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="ctqui1.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  Contenido 1</a>
    <a href="ctqui2.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-bank fa-fw"></i> Contenido 2</a>
    <a href="ctqui3.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  Contenido 3</a>
    <a href="ctqui4.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i> Contenido 4</a>
    <a href="ctqui5.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  Contenido 5</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Logros</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">

        <a href="usuario.html"><div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div></a>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4>Conprension de problemas</h4>
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
        <h5>clases</h5>
        <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
          <tr>
            <td><i class=" w3-text-blue w3-large"></i></td>
            <th>Clase</th>
            <th><i>Materia</i></th>
            <th><i>Porcentaje cursado</i></th>
          </tr>
          <tr>
            <td><a href="matinter.php"><i class="icon-book w3-text-red w3-large"></i></a></td>
            <td>Clase de matematicas intermedio</td>
            <td><i>Matematicas</i></td>
            <th><i>52%</i></th>
          </tr>
          <tr>
            <td><a href="cuquibas.php"<i class="icon-book w3-text-yellow w3-large"></i></td>
            <td>Clase de Quimica basica</td>
            <td><i>Ciencias</i></td>
            <th>47%</th>
          </tr>
          <tr>
            <td><a href="fisava.php"><i class="icon-book w3-text-red w3-large"></i></a></td>
            <td>Clase de fisica Avanzada</td>
            <td><i>Ciencias experimentales</i></td>
            <th>75%</th>
          </tr>
          <tr>
            <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
            <td>Tus primeras valoraciones</td>
            <td><i>06/10/2018</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-laptop w3-text-red w3-large"></i></td>
            <td>Tutorial de inicio</td>
            <td><i>17/09/2018</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-share-alt w3-text-green w3-large"></i></td>
            <td>Nuevas actualizaciones.</td>
            <td><i>17/09/2018</i></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Estadisticas de Materias</h5>
    <p>Quimica</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:72%">72%</div>
    </div>

    <p>Español</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:69%">69%</div>
    </div>

    <p>fisica</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:75%">75%</div>
    </div>
  </div>
  <hr>

  <div class="w3-container">
    <h5>Calificaciones</h5>
    <h6>En esta seccion encontraras las calificaciones en porcentajes </h6>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      <tr>
        <td>Quimica</td>
        <td>65%</td>
      </tr>
      <tr>
        <td>Fisica</td>
        <td>75.7%</td>
      </tr>
      <tr>
        <td>Matematicas</td>
        <td>85.6%</td>
      </tr>
      <tr>
        <td>Filosofia</td>
        <td>2.1%</td>
      </tr>
      <tr>
        <td>Español</td>
        <td>1.9%</td>
      </tr>
      <tr>
        <td>Geometria</td>
        <td>1.5%</td>
      </tr>
    </table><br>
    <button class="w3-button w3-dark-grey">Mas materias <i class="fa fa-arrow-right"></i></button>
  </div>



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
