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


//Recuperando dados do formulário

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT); //Hash da senha usando password_hash

try{

    //Prepara a instrução SQL para inserir no DB
    $stm = $coon->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");

    //Substitu os parâmetros da instrução do SQL pelos valores fornecidos
    $stm->bindParam(':nome', $nome);
    $stm->bindParam(':email', $email);
    $stm->bindParam(':senha', $senha);

    //executa a instrução preparada

        echo "Novo registro inserido com sucesso.";
} catch (PDOException $e){
    //Caso ocorra algum erro durante a execução da instrução SQL, exibe a msg
    echo "Erro ao inserir registro: " . $e->getMessage();
}

// Por fim fechamos a conexão
$coon = null;

