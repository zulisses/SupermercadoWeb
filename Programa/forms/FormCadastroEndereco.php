<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Endereço</title>
    </head>
    <body>
        <h1>Cadastro de Endereço</h1>
        <p>Preencha os dados a seguir:</p>
        <form action="CadastroEndereco.php" method="POST">
            <label for="ufEndereco">UF: </label>
            <input type="text" name="ufEndereco" id=ufEndereco>
            <br>
            <label for="cidadeEndereco">Cidade: </label>
            <input type="text" name="cidadeEndereco" id=cidadeEndereco>
            <br>
            <label for="bairroEndereco">Bairro: </label>
            <input type="text" name="bairroEndereco" id=bairroEndereco>
            <br>
            <label for="ruaEndereco">Rua: </label>
            <input type="text" name="ruaEndereco" id=ruaEndereco>
            <br>
            <label for="numeroEndereco">Número: </label>
            <input type="number" name="numeroEndereco" id=numeroEndereco>
            <br>
            <label for="complementoEndereco">Complemento: </label>
            <textarea name="complementoEndereco" id="complementoEndereco" cols="30" rows="1"></textarea>
            <br>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>