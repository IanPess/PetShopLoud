<?php
include('includes/conexao.php');
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
    <title>Dados do Cliente</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <div class="container">
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
        $nome_animal = $_POST['nome_animal'];
        $especie = $_POST['especie'];
        $raca = $_POST['raca'];
        $dataa = $_POST['dataa'];
        $ativo = $_POST['ativo'];
        
        echo "<h1>Dados do Animal</h1>";
        echo "Nome do Animal: $nome_animal<br>";
        echo "Especie: $especie<br>";
        echo "Raça: $raca<br>";
        echo "Data: $dataa<br>";
        echo "Castrado: $ativo<br>";
        
        $sql =  "INSERT INTO Animal (nome_animal,especie, raca, dataa,ativo, foto)";
        $sql .= " VALUES ('".$nome_animal."','".$especie."','".$raca."','".$dataa."','".$ativo."','".$nome_foto."')";
        echo "<p>" . $sql . "</p>";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados Cadastrados com sucesso</h2>";
        } else {
            echo "<h2>Erro ao cadastrar</h2>";
            echo "<p>" . mysqli_error($con) . "</p>";
        }
    ?>
    <button class="btn"><a href="./index.php">Voltar</a></button>
  </div>
</body>
</html>