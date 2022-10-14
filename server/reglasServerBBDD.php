<?php
//----------------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------------
//Archivo realizado por: Javier Egea Escribá
//Nombre Archivo: ux.js
//Descripción: Archivo en el que se encuentran las reglas del servidor que se comunica directamente con la BBDD
//----------------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------------

include ('conexion.php');

//---------------------------------------------------------------------------------
//  getUltimaMedida() --> ultimaMedicion{IdMedicion, Valor, TipoMedida, Fecha, Latitud, Longitud}
//
//
//---------------------------------------------------------------------------------
function getUltimaMedida(){

    $query="SELECT * FROM mediciones";
    $mysql = conexion();
    $resultado=  $mysql->query($query);
    if($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc()) {
            $ultimaMedicion = "{\"IdMedicion\": \"" . $row["IdMedicion"]. "\", \"Valor\": \"" . $row["Valor"]. "\", \"TipoMedida\": \"" . $row["TipoMedida"]. "\", \"Fecha\": \"" . $row["Fecha"]. "\", \"Latitud\": \"" . $row["Latitud"]. "\", \"Longitud\": \"" . $row["Longitud"]. "\" }";
        }
        return $ultimaMedicion;
    }else{
        echo "Sin Resultados";
    }
}

//---------------------------------------------------------------------------------
//  insertarMedida()
//
//(IdMedicion, Valor, TipoMedida, Fecha, Latitud, Longitud) --> insertarMedida()
//---------------------------------------------------------------------------------
function insertarMedida($IdMedicion, $Valor, $TipoMedida, $Fecha, $Latitud, $Longitud){

    $query="INSERT INTO mediciones 
              (IdMedicion , Valor , TipoMedida , Fecha , Latitud , Longitud) 
    VALUES('".$IdMedicion."','".$Valor."','".$TipoMedida."','".$Fecha."','".$Latitud."','".$Longitud."')";
    $mysql = conexion();
    $resultado=$mysql->query($query);
    if($resultado){
        echo "La medicion se ha insertado de forma exitosa";
    }else{
        echo "Error al insertar la medicion";
    }
}
