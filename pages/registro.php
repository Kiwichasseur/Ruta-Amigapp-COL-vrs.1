<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Nombre-->
  <title>Ruta Amigapp</title>
  <!-- Estilos CSS -->
  <link rel="stylesheet" href="../styles/registro.css">
</head>

<body>
  <main>
    <!--Contenedor principal -->
    <article class="principal-container">

      <!-- Contenedor información-->
      <article class="form-container">
        <!--Sección izquierda -->
        <section class="mid-container">
          <article class="logo-container">
            <img src="../assets/img/logo.png" alt="logo" class="responsive">
          </article>
        </section>
        <!--Sección derecha -->
        <section class="mid-container">
          <header>
            <h1 class="principal-title">REGISTRO</h1>
          </header>
          <!--Register form con el metodo get-->
          <form name="form-registro" method="get" action="registro.php">
            <!--Name user-->
            <input class="input" type="text" id="name-user" name="name-user" placeholder="Nombre" />
            <!--Last name user-->
            <input class="input" type="text" id="lastName-user" name="lastName-user" placeholder="Apellido" />
            <!--Email user-->
            <input class="input" type="text" id="email-user" name="email-user" placeholder="Correo" />
            <!--password user-->
            <input class="input" type="password" id="password-user" name="password-user" placeholder="Contraseña" />
            <!--terms & conditions usuario-->
            <label class="terms-container"><input type="checkbox" id="cbox1" value="checkbox"> Aceptar términos y
              condiciones</label>
            <input type="submit" id="ingresar" name="ingresar" value="INGRESAR">
            <label class="log-in">Si ya tienes cuenta ingresa <a href="./login.html">aquí</a> </label>
          </form>
        </section>
      </article>
    </article>
    </article>
  </main>

</body>
<?php

//$busqueda=$GET['buscar'];
//asignar variables y traer mediante el get, se referencia mediante el id
$userName = $_GET['name-user'];
$lastNameUser = $_GET['lastName-user'];
$userEmail = $_GET['email-user'];
$userPassword = $_GET['password-user'];

require('../php/conexion.php');
//If para validar si la conexión fue exitosa o no
if (mysqli_connect_errno()) {
  echo "No pudo conectarse con la base de datos";
  exit();
}
//Funcion para mirar si la conexion fue exitosa
$conexion = mysqli_connect($db_host, $db_name, $db_user, $password);

//Para modificación del alfabeto latino
mysqli_set_charset($conexion, "utf8");

//Insertar datos en la tabla usuario de la base de datos
$consulta = "INSERT INTO usuario(nombre_usuario,apellido_usuario,correo_usuario,password_usuario) values($userName,$lastNameUser,$userEmail,$userPassword)";
//Revisa si los datos fueron insertados y devuelve un booleano
$resultados = mysqli_query($conexion, $consulta);
if ($resultados == false) {
  echo "Error en la inserción de datos";
} else {
  "Registro almacenado correctamente";
}
?>

</html>