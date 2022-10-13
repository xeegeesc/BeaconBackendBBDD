<?php
//$mysql=new mysqli("localhost:3306","jegeesc_admin","xav743312","jegeesc_proyecto3a");

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
