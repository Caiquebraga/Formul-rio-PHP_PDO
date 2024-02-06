# Formulário PHP com PDO - Projeto de Cadastro


Este é um projeto simples de formulário em PHP para cadastro, utilizando a extensão PDO (PHP Data Objects) para interação com o banco de dados. Este formulário permite a inserção de dados em um banco de dados utilizando boas práticas de segurança, como consultas preparadas para evitar injeção SQL.

## Pré-requisitos
Antes de começar, certifique-se de que você tenha:

- PHP instalado em seu ambiente de desenvolvimento.
- Um servidor web configurado (por exemplo, Apache ou Nginx).
- Um banco de dados (por exemplo, MySQL) configurado e acessível.
- Configuração do Banco de Dados
- Crie um banco de dados no seu servidor MySQL:

# sql
1.Copy code
2.CREATE DATABASE nomedobanco;
3.Crie uma tabela para armazenar os dados do formulário:

# sql
- Copy code
CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);
- Configuração do Projeto
Clone este repositório para o seu ambiente local:

- bash
Copy code
git clone https://github.com/Caiquebraga/Formul-rio-PHP_PDO.git
Navegue até o diretório do projeto:

- bash
Copy code
cd Formul-rio-PHP_PDO
Configure as informações do banco de dados no arquivo conexao.php. Substitua os valores de DB_HOST, DB_NAME, DB_USER e DB_PASSWORD pelos dados correspondentes do seu ambiente.

## Utilização
Inicie o servidor web (por exemplo, Apache) e certifique-se de que o PHP está habilitado.

Abra o formulário no navegador:

arduino
- Copy code
- http://localhost/Formul-rio-PHP_PDO/
- Preencha o formulário de cadastro e envie os dados.

Os dados serão inseridos no banco de dados e uma mensagem de sucesso será exibida.

## Contribuição
Sinta-se à vontade para contribuir para este projeto através de pull requests. Se encontrar problemas ou tiver sugestões, abra uma issue.

## Licença
Este projeto é licenciado sob a Licença MIT.
