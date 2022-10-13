<?php
include 'reglasServerBBDD.php';

if ($_SERVER['REQUEST_METHOD']=='GET'){

    echo getUltimaMedida();

}elseif ($_SERVER['REQUEST_METHOD']=='POST'){

    $IdMedicion=$_POST["IdMedicion"];
    $Valor=$_POST["Valor"];
    $TipoMedida=$_POST["TipoMedida"];
    $Fecha=$_POST["Fecha"];
    $Latitud=$_POST["Latitud"];
    $Longitud=$_POST["Longitud"];

    echo insertarMedida($IdMedicion, $Valor, $TipoMedida, $Fecha, $Latitud, $Longitud);
}

