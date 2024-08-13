<?php
include('includes/conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$id_cidade = $_POST['id_cidade'];

$sql = "INSERT INTO Cliente (nome, email, endereco, bairro, cep, id_cidade) VALUES ('$nome', '$email', '$endereco', '$bairro', '$cep', '$id_cidade')";
$result = mysqli_query($con, $sql);

if ($result) {
    echo "Cliente cadastrado com sucesso.";
} else {
    echo "Erro ao cadastrar o cliente: " . mysqli_error($con);
}

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <button class="btn"><a href="./index.php">Voltar</a></button>
</body>
</html>
