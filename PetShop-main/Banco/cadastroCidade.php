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
            <legend>Cadastro da Cidade</legend>
            <form action="CadastroCidadeExe.php" method="post">
                <div class="form-group">
                    <label for="nomecidade">Nome da Cidade</label>
                    <input type="text" name="nomecidade" id="nomecidade" required>
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado" required>
                        <option value="SP">SP</option>
                        <option value="RJ">RJ</option>
                        <option value="MG">MG</option>
                        <option value="ES">ES</option>
                        <!-- Adicione outros estados conforme necessário -->
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
