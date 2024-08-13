<?php
include('includes/conexao.php');

$id_animal = $_GET['id_animal'];
$sql = "SELECT * FROM Animal WHERE id_animal=$id_animal";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Animal</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <fieldset>
            <legend>Cadastro do Animal</legend>
            <form action="alteraAnimalExe.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_animal" value="<?php echo htmlspecialchars($row['id_animal']); ?>">

                <div class="form-group">
                    <?php
                    if($row['foto'] != "");
                         echo "<td><img src='".$row['foto']."'width='120' height='100'/></td>";     
                    ?>
                    <label for="foto">Foto do Animal</label>
                    <input type="file" name="foto" id="foto" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="nome_animal">Nome do Animal</label>
                    <input type="text" name="nome_animal" id="nome_animal" value="<?php echo htmlspecialchars($row['nome_animal']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="especie">Espécie</label>
                    <input type="text" name="especie" id="especie" value="<?php echo htmlspecialchars($row['especie']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="raca">Raça</label>
                    <input type="text" name="raca" id="raca" value="<?php echo htmlspecialchars($row['raca']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="dataa">Data</label>
                    <input type="date" name="dataa" id="dataa" value="<?php echo htmlspecialchars($row['dataa']); ?>" required>
                </div>
                <div class="form-group">
                    <h1>Castrado?</h1>
                    <div class="radio-group">
                        <input type="radio" id="castrado_sim" name="ativo" value="1" <?php echo $row['ativo'] == 1 ? 'checked' : ''; ?>>
                        <label for="castrado_sim">Sim</label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" id="castrado_nao" name="ativo" value="0" <?php echo $row['ativo'] == 0 ? 'checked' : ''; ?>>
                        <label for="castrado_nao">Não</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn">Atualizar</button>
                </div>
            </form>
        </fieldset>
        <button class="btn"><a href="./index.php">Voltar</a></button>
    </div>
</body>
</html>
