<?php
include('includes/conexao.php');

if (isset($_GET['id_cidade'])) {
    $id_cidade = $_GET['id_cidade'];
    
    $sql = "DELETE FROM Cidade WHERE id_cidade = $id_cidade";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Cidade deletada com sucesso.";
    } else {
        echo "Erro ao deletar cidade: " . mysqli_error($con);
    }
} else {
    echo "ID da cidade não fornecido.";
}

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Cidade</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <button class="btn"><a href="./index.php">Voltar</a></button>
</body>
</html>
