<?php
//----------------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------------
//Archivo realizado por: Javier Egea Escribá
//Nombre Archivo: index.php
//Descripción: Archivo en el que se decide si el metodo de la peticion es GET o POST y se llaman a funciones de las reglas del servidor.
//----------------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------------

include 'logicaNegocio.php';

//si es GET llamo a getUltimaMedida()
if ($_SERVER['REQUEST_METHOD']=='GET'){

    echo getUltimaMedida();

//si es POST llamo a insertarMedida()
}elseif ($_SERVER['REQUEST_METHOD']=='POST'){

    $IdMedicion=$_POST["IdMedicion"];
    $Valor=$_POST["Valor"];
    $TipoMedida=$_POST["TipoMedida"];
    $Fecha=$_POST["Fecha"];
    $Latitud=$_POST["Latitud"];
    $Longitud=$_POST["Longitud"];

    echo insertarMedida($IdMedicion, $Valor, $TipoMedida, $Fecha, $Latitud, $Longitud);
}

