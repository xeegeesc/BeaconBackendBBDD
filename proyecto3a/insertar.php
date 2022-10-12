<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $IdMedicion=$_POST["IdMedicion"];
    $Valor=$_POST["Valor"];
    $TipoMedida=$_POST["TipoMedida"];
    $Fecha=$_POST["Fecha"];
    $Latitud=$_POST["Latitud"];
    $Longitud=$_POST["Longitud"];


    $query="INSERT INTO mediciones 
              (IdMedicion , Valor , TipoMedida , Fecha , Latitud , Longitud) 
    VALUES('".$IdMedicion."','".$Valor."','".$TipoMedida."','".$Fecha."','".$Latitud."','".$Longitud."')";
    $resultado=$mysql->query($query);
    if($resultado==true){
        echo "La medicion se ha insertado de forma exitosa";
    }else{
        echo "Error al insertar la medicion";
    }
}