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
        <?php
            require_once "../../modelo/Categoria.php";
            require_once "../../dao/DAOCategoria.php";

            //Filtragem dos dados

            $Categoria = new Categoria();
            $Categoria->setGrupo($_POST["grupoCategoria"]);
            $Categoria->setSubGrupo($_POST["subGrupoCategoria"]);

            $daoCategoria = new DAOCategoria();
            if($daoCategoria->incluir($Categoria)){
                echo "Categoria cadastrada com sucesso";
            }else{
                echo "Categoria não pode ser cadastrada";
            }
        ?>
        <hr>
        <a href="ListaCategoria.php">Ver lista</a>
    </body>
</html>