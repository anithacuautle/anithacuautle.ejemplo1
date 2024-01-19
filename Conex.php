<? php
    $mysqli=new MysQli("localhost","root","","inojeans");

if($mysqli -> conect_errno){
    die ("Fallo la conexion".$mysqli ->conect_errno()
        .")" .$mysqli -> connect_errno());
    
}else{
    echo"Conexion exitosa";
    ?>
