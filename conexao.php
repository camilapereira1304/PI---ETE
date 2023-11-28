<?php
session_start();

// Configurações do banco de dados
$host = "localhost";
$usuario = "root";
$senha = "";
$bancoDados = "projeto_infinite";

// Conectar ao banco de dados
$conexao = new mysqli($host, $usuario, $senha, $bancoDados);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $dataNascimento = $_POST["data_nascimento"];

    // Inserir dados na tabela 'cadastro'
    $sql = "INSERT INTO cadastro (nome, email, data_nascimento) VALUES ('$nome', '$email', '$dataNascimento')";

    if ($conexao->query($sql) === TRUE) {
        //echo "Registro inserido com sucesso";
		$_SESSION["ERROR"] = "Cadastro realizado com Sucesso!";
		header("Location: formulario.php");
    } else {
   		$_SESSION["ERROR"] = "Erro ao cadastrar no banco!";
		header("Location: formulario.php");
		//echo "Erro ao inserir registro: " . $conexao->error;
    }
}

// Fechar a conexão quando terminar
// $conexao->close();
?>