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
            <legend>Cadastro do Animal</legend>
            <form action="cadastroAnimalExe.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="foto">Foto do Animal</label>
                    <input type="file" name="foto" id="foto" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="nome_animal">Nome do Animal</label>
                    <input type="text" name="nome_animal" id="nome_animal" required>
                </div>
                <div class="form-group">
                    <label for="especie">Especie</label>
                    <input type="text" name="especie" id="especie" required>
                </div>
                <div class="form-group">
                    <label for="raca">Raça</label>
                    <input type="text" name="raca" id="raca" required>
                </div>
                <div class="form-group">
                    <label for="dataa">Data Nascimento</label>
                    <input type="date" name="dataa" id="dataa" required>
                </div>
                <div class="form-group">
                    <h1>Castrado?</h1>
                    <div class="radio-group">
                        <input type="radio" id="ativo" name="ativo" value="1">
                        <label for="sim">Sim</label>
                </div>
                <div class="radio-group">
                    <input type="radio" id="ativo" name="ativo" value="0">
                    <label for="sim">Não</label>
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