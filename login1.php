<?php

include('conexion.php');

if(session_id()=="")
   {
      session_start();
   }
 
   if($_POST)
   {
      if(@$_SESSION['autentificado']!=TRUE)
      {
          $_SESSION['autentificado'] = TRUE;
          $_SESSION['usuario'] = $_POST['usuario'];
          $_SESSION['psw'] = $_POST['psw'];

}
   }
 
   if(@$_GET['salir']=="true")
   {
      session_unset();
      session_destroy();
   }
 
   ?>
   <html> 
   <head>
      <title>Ejemplo de sesión en PHP 7</title>
   </head> 
   <body>
 
   <?php
   if(@$_SESSION['autentificado']==TRUE)
   {
   ?>
      <p>
         BIENVENIDO <?=$_SESSION['usuario'];?>
      </p>
   <?php 
   }
   else
   {
   ?>

