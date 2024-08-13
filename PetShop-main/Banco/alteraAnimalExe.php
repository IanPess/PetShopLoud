<?php
    include('includes/conexao.php');

    $nome_foto="";
        if(file_exists($_FILES['foto']['tmp_name']))
        {
            $pasta_destino = 'fotos/';
            $extensao = strtolower(substr($_FILES['foto']['name'], -4));
            $nome_foto = $pasta_destino . date('Ymd-His') . $extensao;
            move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
        }
    $id_animal = $_POST['id_animal'];
    $nome_animal = $_POST['nome_animal'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $dataa = $_POST['dataa'];
    $ativo = $_POST['ativo'];
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
    echo "<p>foto: $nome_foto</p>";
    echo "<p>nome_animal: $nome_animal</p>";
    echo "<p>especie: $especie</p>";
    echo "<p>raca: $raca</p>";
    echo "<p>dataa: $dataa</p>";
    echo "<p>ativo: $ativo</p>";
    $sql = "";
    if($nome_foto == "")
            $sql = "UPDATE Animal SET 
            nome_animal = '$nome_animal',
            especie = '$especie',
            raca = '$raca',
            dataa = '$dataa',
            ativo = '$ativo'
            WHERE id_animal = $id_animal";
    else
            $sql = "UPDATE Animal SET 
            foto = '$nome_foto',
            nome_animal = '$nome_animal',
            especie = '$especie',
            raca = '$raca',
            dataa = '$dataa',
            ativo = '$ativo'
            WHERE id_animal = $id_animal";
    
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados atualizados";
    else
        echo "Erro ao atualizarar dados\n"
        .mysqli_error($con);
    
    ?>
</body>
</html>