<?php
$host = 'localhost:3306';
$user = 'root';
$senha = '';
$banco = 'cafe';

$conn = new mysqli($host, $user, $senha, $banco);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Receber dados do formulário
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Preparar e executar a query SQL
$sql = "INSERT INTO contatos (name, email, phone) VALUES ('$name', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
