<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>INNO JEANS | INICIAR SESIÓN</title>
      <link rel="icon" href="images/favicon2.png" type="image/gif" />
    <link rel="stylesheet" type="text/css" href="login.css">
      
  </head>
  <body bgcolor="lightgrey" background="images/uyl.png">
    <div class="loginIzq"><img style="border-radius: 40px 0 0 170px;"  src="images/LOGO.jpg"></div>
      <div class="loginDer">
        <h1 align="center" style="font-family:'Chiller';">INICIO DE SESIÓN</h1>
        <center>
            <br><br>
    <form method="post">
      <span class="textoLogin">Usuario:</span><input type="text" name="caja_Usuario" class="cajaLogin" autocomplete="off" required placeholder="Escribe tu usuario"><br><br>
      <span class="textoLogin">Password:</span><input type="password" name="caja_Psw" class="cajaLogin" autocomplete="off" required placeholder="Escribe tu contraseña">
      <br><br>
      <button type="submit" name="btn_Login" class="botonLogin">Iniciar sesión</button>
    </form>
    <form action="registro.html" method="post">
      <button type="submit" name="btn_Usuario" class="botonReg">Registrar usuario</button>
    </form></center>
    </div>
  </body>
</html>
<?php

session_start();
if(isset($_SESSION['nombredelusuario']))
{
	header('location: index.php');
}

if(isset($_POST['btn_Login']))
{
	
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="inojeans";
	
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if(!$conn)
	{
		die("No hay conexión: ".mysqli_connect_error());
	}
	
	$nombre=$_POST['caja_Usuario'];
	$pass=$_POST['caja_Psw'];
	
	$query=mysqli_query($conn,"Select * from usuarios where usuario = '".$nombre."' and password = '".$pass."'");
	$nr=mysqli_num_rows($query);
	
	if(!isset($_SESSION['nombredelusuario']))
	{
	if($nr == 1)
	{
		$_SESSION['nombredelusuario']=$nombre;
		header("location: index.php");
	}
	else if ($nr == 0)
	{
		echo "<script>alert('Usuario no existe');window.location= 'login.php' </script>";
	}
	}
}
?>