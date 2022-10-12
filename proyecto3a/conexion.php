<?php
$mysql=new mysqli("localhost","root","","proyecto3a");
if($mysql->connect_error){
    die("Error de conexion");
}
else{
    echo "Conexion exitosa";
}