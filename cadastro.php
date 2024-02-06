<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmarSenha = $_POST["confirmar_senha"];
    
    // Validação simples dos campos 
    if (empty($nome) || empty($email) || empty($senha) || empty($confirmarSenha)) {
        echo "Por favor, preencha todos os campos.";
    } elseif ($senha != $confirmarSenha) {
        echo "As senhas não coincidem.";
    } else {
        // Se todos os campos estiverem preenchidos e as senhas coincidirem, você pode prosseguir com o armazenamento dos dados
        // Neste exemplo, apenas exibiremos os dados submetidos
        echo "Cadastro realizado com sucesso!<br>";
        echo "Nome: $nome<br>";
        echo "E-mail: $email<br>";
        // Aviso: Nunca armazene a senha em texto plano em um banco de dados. Use funções de hash seguras, como password_hash().
    }
} else {
    // Se o formulário não foi enviado, exibe uma mensagem de erro
    echo "Erro: O formulário não foi enviado.";
}
?>
