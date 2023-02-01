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
        <?php
            require_once "../../modelo/Endereco.php";
            require_once "../../dao/DAOEndereco.php";

            //Filtragem dos dados

            $endereco = new Endereco();
            $endereco->setUf($_POST["ufEndereco"]);
            $endereco->setCidade($_POST["cidadeEndereco"]);
            $endereco->setBairro($_POST["bairroEndereco"]);
            $endereco->setRua($_POST["ruaEndereco"]);
            $endereco->setNumero($_POST["numeroEndereco"]);
            $endereco->setComplemento($_POST["complementoEndereco"]);

            $daoEndereco = new DAOEndereco();
            if($daoEndereco->incluir($endereco)){
                echo "Endereço cadastrada com sucesso";
            }else{
                echo "Endereço não pode ser cadastrada";
            }
        ?>
        <hr>
        <a href="ListaEndereco.php">Ver lista</a>
    </body>
</html>