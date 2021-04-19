<?php
session_start();

// initializing variables
$nombre ="";
$apellido ="";
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $apellido = mysqli_real_escape_string($db, $_POST['apellido']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $serial = mysqli_real_escape_string($db, $_POST['serial']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($nombre)) { array_push($errors, "Nombre requerido "); }
  if (empty($apellido)) { array_push($errors, "Apellido requerido "); }
  if (empty($username)) { array_push($errors, "Ususario requerido "); }
  if (empty($email)) { array_push($errors, "Email requerido"); }
  if (empty($password_1)) { array_push($errors, "Contraseña es requerida"); }
  if ($password_1 != $password_2) {
	array_push($errors, "No coinsiden las contraseñas");
  }
  if ($serial != "XqFdDFUHn7m"){
    array_push($errors, "El serial no es correcto");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' OR nombre='$nombre' OR apellido='$apellido' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['nombre'] === $nombre) {
      array_push($errors, "Ese usuario ya existe");
    }
    if ($user['apellido'] === $apellido) {
      array_push($errors, "Ese apellido ya existe");
    }
    if ($user['username'] === $username) {
      array_push($errors, "Ese usuario ya existe");
    }
    if ($user['email'] === $email) {
      array_push($errors, "El Email ya existe");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (nombre,apellido,username, email, password)
  			  VALUES('$nombre','$apellido','$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: usuario.php');
  }
}

// ...
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Uuario requerido");
  }
  if (empty($password)) {
  	array_push($errors, "Contraseña requerida");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: usuario.php');
  	}else {
  		array_push($errors, "Tienes mal el usuario o la contraseña revisalo");
  	}
  }
}

?>
