<?php
include('includes/conexao.php');

if (isset($_GET['id_cliente'])) {
    $id_cliente = $_GET['id_cliente'];
    
    $sql = "DELETE FROM Cliente WHERE id = $id_cliente";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Cliente deletado com sucesso.";
    } else {
        echo "Erro ao deletar cliente: " . mysqli_error($con);
    }
} else {
    echo "ID do cliente não fornecido.";
}

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Cliente</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <button class="btn"><a href="./index.php">Voltar</a></button>
</body>
</html>
