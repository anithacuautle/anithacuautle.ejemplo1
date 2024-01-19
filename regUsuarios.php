<?php
include('conexion.php');

//obtener datos del formulario
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$domicilio=$_POST['dom'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$psw = $_POST['psw'];


$query0='SELECT *FROM usuarios WHERE usuario="'.$usuario.'" or apellido_pat="'.$paterno.'" or apellido_mat="'.$materno.'" or email="'.$correo.'" or usuario="'.$usuario.'" ;';
//ejecutar el $query0:
$filas= mysqli_query($con,$query0) or die("Error de consulta");
$encontrados= mysqli_num_rows($filas);
if($encontrados ==0){
    
$query = 'INSERT INTO usuarios(usuario,nombre,apellido_pat,apellido_mat,domicilio,edad,sexo,email,telefono,password)
VALUES("'.$usuario.'","'.$nombre.'","'.$paterno.'","'.$materno.'","'.$domicilio.'",
  "'.$edad.'","'.$sexo.'","'.$correo.'","'.$telefono.'","'.$psw.'");';

  mysqli_query($con,$query) or die("Error de consulta");
  echo '<b>El ususario ha sido registrado correctamente</b><br>
  Tus datos de inicio de sesión:<br>
  <b>Usuario:</b>'.$usuario.'<br>
  <b>Password:</b>'.$psw;
  echo '<br><a href="registro.html">Registrar otro usuario</a>
  <a href="login.html">Iniciar sesión</a>';
}else {
  echo '<h1>EL Usuario ya Existe</h1>';
  echo '<br><a href="registro.html">Registrar nuevamente</a>';
}
  mysqli_close($con);

?>