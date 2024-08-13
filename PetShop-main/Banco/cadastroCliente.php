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
    <div class="container">
        <fieldset>
            <legend>Cadastro do Cliente</legend>
            <form action="CadastroClienteExe.php" method="post">
                <div class="form-group">
                    <label for="nome">Nome do Cliente</label>
                    <input type="text" name="nome" id="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" id="endereco" required>
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" id="bairro" required>
                </div>
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" name="cep" id="cep" required>
                </div>
                <div class="form-group">
                    <label for="id_cidade">Cidade</label>
                    <select name="id_cidade" id="id_cidade" required>
                        <?php
                        include('includes/conexao.php');
                        $sql = "SELECT * FROM Cidade";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . htmlspecialchars($row['id_cidade']) . "'>" . htmlspecialchars($row['nomecidade']) . "</option>";
                        }
                        ?>
                    </select>
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
