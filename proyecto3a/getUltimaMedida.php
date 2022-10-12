<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    require_once 'conexion.php';
 /* $IdMedicion=$_GET["IdMedicion"];
    $Valor=$_GET["Valor"];
    $TipoMedida=$_GET["TipoMedida"];
    $Fecha=$_GET["Fecha"];
    $Latitud=$_GET["Latitud"];
    $Longitud=$_GET["Longitud"];
 */

    $query="SELECT * FROM mediciones";
    $resultado=$mysql->query($query);
    if($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc()) {
            $ultimaMedicion = "{\"IdMedicion\": \"" . $row["IdMedicion"]. "\", \"Valor\": \"" . $row["Valor"]. "\", \"TipoMedida\": \"" . $row["TipoMedida"]. "\", \"Fecha\": \"" . $row["Fecha"]. "\", \"Latitud\": \"" . $row["Latitud"]. "\", \"Longitud\": \"" . $row["Longitud"]. "\" }";
          }
          echo $ultimaMedicion;
    }else{
        echo "Sin Resultados";
    }
}