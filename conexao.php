<?php

try{
    $HOST = "localhost";
    $BANCO = "esp32-mysql";
    $USUARIO = "root";
    $SENHA = "";

    $PDO = new PDO("mysql:host=" . $HOST . ";dbname=" . $BANCO . ";chsrset=utf8", $USUARIO, $SENHA);

}catch(PDOException $erro){
       echo "erro de conexão: " . $erro->getMessage();
}

?>
