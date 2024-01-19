<?php

class Conexion{
    public function conectar(){
        $dbs = 'mysql:dbname=inojeans;host=localhost';
        $usuario='root';
        $contrasena='';
        try{
            $base=new PDO($dbs,$usuario,$contrasena);
            echo "Conexion Exitosa <br>";
            return $base;
        }catch (PDOException $e){
            echo 'Fallo la conexion: ' .$e->getMessage();
        }
    }
}

?>