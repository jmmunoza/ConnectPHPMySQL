<?php

function connectDB() {
    $server      = "localhost";
    $user        = "root";
    $password    = "";
    $dbname      = "phptest";
    $mysqlDB = new mysqli($server, $user, $password,$dbname) or die("Hubo un error: %s\n". $mysqlDB -> error);
    
    return $mysqlDB;
}
 
function disconnectDB($mysqlDB) {
    $mysqlDB -> close();
}

?>