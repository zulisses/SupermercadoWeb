<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Cliente</title>
    </head>
    <body>
        <h1>Cadastro de Cliente</h1>
        <?php
            require_once "../dao/DAOCliente.php";
            require_once "../modelo/Cliente.php";
            

            //Filtragem dos dados

            $Cliente = new Cliente();
            $Cliente->setEmail($_POST["emailCliente"]);
            $Cliente->setTelefone($_POST["telefoneCliente"]);
            $Cliente->setNome($_POST["nomeCliente"]);
            $Cliente->setLogradouro($_POST["logradouroCliente"]);
            $Cliente->setSexo($_POST["sexoCliente"]);
            $Cliente->setCpf($_POST["cpfCliente"]);
            $Cliente->setDataNascimento($_POST["dataNascimentoCliente"]);

            $daoCliente = new DAOCliente();
            if($daoCliente->incluir($Cliente)){
                echo "Cliente cadastrado com sucesso";
            }else{
                echo "Cliente não pode ser cadastrado";
            }
        ?>
        <hr>
        <a href="ListaCliente.php">Ver lista</a>
    </body>
</html>