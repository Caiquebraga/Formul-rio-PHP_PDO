<?php

$hostname = 'localhost'; //Nome do host do banco
$username = 'root'; //Nome de usuário do DB
$password = 'rootroor'; // senha do DB
$database = 'cadastro_php'; // nome do seu DB

try {
    //Estabeleça sua conexão com DB criado
    $coon = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

    //Defina o metodo de erro do PDO para exerções
    $coon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão bem-sucedida.";
} catch(PDOException $e){
    //caso ocorra algum erro durante conexão, eiba uma msg de erro
    echo "Erro de conexão: " . $e->getMessage();
}
