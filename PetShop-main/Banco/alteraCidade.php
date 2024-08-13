<?php
    include('includes/conexao.php');
    $id_cidade = $_GET['id_cidade'];
    $sql = "SELECT * FROM cidade WHERE id_cidade=$id_cidade";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cidade</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>
    <div class="container">
        <fieldset>
            <legend>Cadastro de Cidade</legend>
            <form action="alteraCidadeExe.php" method="post">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nomecidade" id="nomecidade" required value="<?php echo $row['nomecidade']?>">
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado" required>
                        <option value="SP" <?php $row['estado'] == "SP"  ? "selected" : "" ?>>SP</option>
                        <option value="RJ" <?php $row['estado'] == "RJ"  ? "selected" : "" ?>>RJ</option>
                        <option value="MG" <?php $row['estado'] == "MG"  ? "selected" : "" ?>>MG</option>
                        <option value="ES" <?php $row['estado'] == "ES"  ? "selected" : "" ?>>ES</option>
                    </select>
                </div>
                <div>
                    <input type="hidden" name="id_cidade" value="<?php echo $row['id_cidade']?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn">Cadastrar</button>
                </div>
            </form>
        </fieldset>
        <button class="btn"><a href="./index.php">Voltar</a></button>
    </div>
    
</body>
</html>