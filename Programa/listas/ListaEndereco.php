<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listagem de Endereços</title>
    </head>
    <body>
        <h1>Listagem de Endereços</h1>

        <table border = '3'>
            <tr>
                <th>IdEndereço</th>
                <th>UF</th>
                <th>Cidade</th>
                <th>Bairro</th>
                <th>Rua</th>
                <th>Número</th>
                <th>Complemento</th>
            </tr>
            <?php
                require_once "../../dao/DAOEndereco.php";

                $daoEndereco = new DAOEndereco();

                $lista = $daoEndereco->getLista();

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