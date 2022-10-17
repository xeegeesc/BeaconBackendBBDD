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

/*
 * Descripción getUltimaMedida(): Función que realiza una petición de tipo GET a la BBDD.
 *
 * No dispone de parámetros de entrada
 *
 * @returns {JSON} Devuelve un string en formato Json (ultimaMedicion).
 */
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
/*
 * Descripción insertarMedida(): Función que realiza una petición de tipo POST a la BBDD.
 *
 * @param {Int} IdMedicion - Id de la medición insertada.
 * @param {Real} Valor - Valor resultante (obtenido por el sensor) en la medicion insertada.
 * @param {String} TipoMedida - Tipo de medida que se ha realizado.
 * @param {Long} Fecha - Fecha y hora en la que se ha realizado la medicion.
 * @param {Real} Latitud - Latitud de la posición donde se ha tomado la medicion.
 * @param {Real} Longitud - Longitud de la posición donde se ha tomado la medicion.
 *
 * No devuelve nada
 */
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
