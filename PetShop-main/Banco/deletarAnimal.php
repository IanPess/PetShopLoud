<?php
include('includes/conexao.php');

if (isset($_GET['id_animal'])) {
    $id_animal = $_GET['id_animal'];
    
    $sql = "DELETE FROM Animal WHERE id_animal = $id_animal";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Animal deletado com sucesso.";
    } else {
        echo "Erro ao deletar animal: " . mysqli_error($con);
    }
} else {
    echo "ID do animal não fornecido.";
}

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Animal</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <button class="btn"><a href="./index.php">Voltar</a></button>
</body>
</html>
