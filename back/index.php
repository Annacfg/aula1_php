<?php
header("Content-Type: application/json;charset=utf-8");
header("Access-Control-Allow-Origin: *");

$resposta = [
    "mensagem" => "Back-end respondendo com sucesso!",
    "status" => "ONLINE",
    "nome" => "Anna Clara",
    "sobrenome" => "Faria Guimarães",
    "idade" => "16 anos",
    "altura" => "1,68",
    "jogofav" => "Little Nightmares"
];
echo json_encode($resposta);

?>
