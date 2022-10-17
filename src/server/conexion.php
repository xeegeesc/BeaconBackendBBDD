<?php
//----------------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------------
//Archivo realizado por: Javier Egea Escribá
//Nombre Archivo: ux.js
//Descripción: Archivo en el que se encuentra el metodo para la realizar la conexion con la base de datos.
//----------------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------------

//$mysql=new mysqli("localhost:3306","jegeesc_admin","xav743312","jegeesc_proyecto3a");


//---------------------------------------------------------------------------------
//  conexion() --> mysql
//
/*
 * Descripción conexion(): Función que realiza la conexión a la BBDD.
 *
 * No dispone de parámetros de entrada
 *
* @returns {mysql} Devuelve un un objeto mysql que se utiliza para hacer las peticiones a la BBDD.
 */
//---------------------------------------------------------------------------------
function conexion(){
    $mysql=new mysqli("localhost","root","","proyecto3a");
    if($mysql->connect_error){
        die("Error de conexion");
    }
    else{

        //echo "Conexion exitosa";
        return $mysql;
    }
}
