<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listagem de Clientes</title>
    </head>
    <body>
        <h1>Listagem de Cliente</h1>
        
        <table border = '3'>
                <tr>
                    <th>IdCliente</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>CPF</th>
                    <th>Sexo</th>
                    <th>Data de Nascimento</th>
                    <th>Endereço</th>
                </tr>
                <?php
                    require_once "../../dao/DAOCliente.php";

                    $daoCliente = new DAOCliente();

                    $lista = $daoCliente->getLista();

                    foreach ($lista as $linha) {
                        echo '<tr>';
                        foreach ($linha as $value) {
                            echo '<td>' . $value . '</td>';
                        }
                        echo '</tr>';
                    }
                ?>
        </table>
    </body>
</html>