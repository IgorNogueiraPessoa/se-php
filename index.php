<?php

include("conexao.php");

$umidade = $_GET['umidade'];
$temperatura = $_GET['tempertura'];

$sql = "INSERT INTO dados (umidade, tempertura) VALUES(:umidade, :temperatura);";

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':umidade', $umidade);

$stmt->bindParam(':temperatura', $temperatura);

if($stmt->execute()){
    echo "dados gravados com sucesso!";
}else{
    echo "erro ao gravar dados";
}

?>