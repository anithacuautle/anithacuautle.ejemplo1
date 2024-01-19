<?php
include('conexion.php');

//preparar la sentencia para la consulta:
$query = 'SELECT * FROM cliente;';

//ejecutar la consulta
$rs = mysqli_query($con,$query);

//mostrar los trader_cdlrisefall3methods
echo '<h1 align="center" style="font-family:Elephant">LISTADO DE CLIENTES</h1>';

echo '<table border="1" bgcolor="lightgrey" align="center" width=80%; style="font-family:Gill Sans MT">
<tr>
<td><b>ID CLIENTE</b></td>
<td><b>NOMBRE CLIENTE</b></td>
<td><b>APELLIDO PATERNO</b></td>
<td><b>APELLIDO MATERNO</b></td>
<td><b>EDAD</b></td>
<td><b>DOMICILIO</b></td>
<td><b>USUARIO</b></td>
<td><b>ESTATUS</b></td>
<td><b>E-MAIL</b></td>
<td><b>TELEFONO</b></td>
</tr>';

while ($dato = mysqli_fetch_assoc($rs)) {
echo '<tr>
<td>'.$dato['id_cliente'].'</td>
<td>'.$dato['nombre_client'].'</td>
<td>'.$dato['apellido_pat_client'].'</td>
<td>'.$dato['apellido_mat_client'].'</td>
<td>'.$dato['edad'].'</td>
<td>'.$dato['domicilio_client'].'</td>
<td>'.$dato['usuario'].'</td>
<td>'.$dato['status'].'</td>
<td>'.$dato['e-mail_client'].'</td>
<td>'.$dato['telefono_client'].'</td>
</tr>';
}

echo '</table>';
//cerrar la conexion
mysqli_close($con);
 ?>
