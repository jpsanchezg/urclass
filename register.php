<?php include('server.php')
 ?>
 <!DOCTYPE html>
<html>
<head>
  <title>URCLASS: Registro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

<!--===============================================================================================-->
<link rel="shortcut icon" type="image/icon" href="img/logo2.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>
<body>

<form method="post" action="register.php">
  <div class="container">
    <h1>Registrarse</h1>
    <p>Por favor llenar el formato de registro</p>
    <hr>
  	<?php include('errors.php'); ?>
    <div class="input-group">
    <label for="Nombre"><b>Nombre</b></label>
  	  <input placeholder="Nombre..." type="text" name="nombre" value="<?php echo $nombre; ?>" required>
  	</div>
    <div class="input-group">
    <label for="apellido"><b>Apellido</b></label>
  	  <input placeholder="Apellido..." type="text" name="apellido" value="<?php echo $apellido; ?>"required>
  	</div>
    <div class="input-group">
     <label for="usuario"><b>Usuario</b></label>
  	  <input placeholder="Usuario..."type="text" name="username" value="<?php echo $username; ?>" required>
  	</div>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Ingresa el Email" name="email" value="<?php echo $email; ?>" required  >

    <label for="passordw_1"><b>Contraseña</b></label>
    <input type="password" placeholder="Enter Password" name="password_1" required>

    <label for="password_2"><b>Repite la contraseña</b></label>
    <input type="password" placeholder="Repeat Password" name="password_2" required>
      <div class="input-group">
<form name="form" method="post" action="">
    <label for="erialt"><b>Clave serial</b></label>

<input placeholder="Clave Serial..."type="text" name="serial" required><br>
</div>
    <hr>
    <p>Creando esta cuenta esta aceptando los <a href="#">Terminos & Privacidad</a>.</p>

    <button type="submit" class="registerbtn"  name="reg_user">Registrarse</button>
  </div>

  <div class="container signin">
    <p>Ya tienes cuenta? <a href="login.php">Sign in</a>.</p>  <p>volver al <a href="index.php"><i class="fa fa-home m-l-5" aria-hidden="true"></i>HOME</a>
</p>
  </div>
</form>

</body>
</html>
