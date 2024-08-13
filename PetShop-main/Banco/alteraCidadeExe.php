<?php
    include('includes/conexao.php');
    $id_cidade = $_POST['id_cidade'];
    $nomecidade = $_POST['nomecidade'];
    $estado = $_POST['estado'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Alteração de cidade</h1>
    <button class="btn"><a href="./index.php">Voltar</a></button>
    <?php
    echo "<p>id_ciade: $id_cidade</p>";
    echo "<p>nomecidade: $nomecidade</p>";
    echo "<p>Estado: $estado</p>";
    $sql = "UPDATE cidade SET 
    nomecidade = '$nomecidade',
    estado = '$estado'
    WHERE id_cidade = $id_cidade";
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados atualizados";
    else
        echo "Erro ao atualizarar dados\n"
        .mysqli_error($con);
    
    ?>
</body>
</html>