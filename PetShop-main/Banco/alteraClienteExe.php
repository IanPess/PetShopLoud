<?php
include('includes/conexao.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];

$sql = "UPDATE Cliente SET 
    nome = '$nome',
    email = '$email',
    endereco = '$endereco',
    bairro = '$bairro',
    cep = '$cep'
    WHERE id = $id";

$result = mysqli_query($con, $sql);

if ($result) {
    echo "Dados do cliente atualizados com sucesso.";
} else {
    echo "Erro ao atualizar os dados do cliente: " . mysqli_error($con);
}

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Cliente</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <button class="btn"><a href="./index.php">Voltar</a></button>
</body>
</html>
