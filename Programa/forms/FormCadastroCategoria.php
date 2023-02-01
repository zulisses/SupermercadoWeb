<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Categoria</title>
    </head>
    <body>
        <h1>Cadastro de Categoria</h1>
        <p>Preencha os dados a seguir:</p>
        <form action="CadastroCategoria.php" method="POST">
            <label for="grupoCategoria">Grupo: </label>
            <input type="text" name="grupoCategoria" id=grupoCategoria>
            <br>
            <label for="subGrupoCategoria">Subgrupo: </label>
            <input type="text" name="subGrupoCategoria" id=subGrupoCategoria>
            <br>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>