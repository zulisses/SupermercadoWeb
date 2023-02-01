<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listagem de Categorias</title>
    </head>
    <body>
        <h1>Listagem de Categorias</h1>

        <table border = '3'>
            <tr>
                <th>IdCategoria</th>
                <th>Grupo</th>
                <th>SubGrupo</th>
            </tr>
            <?php
                require_once "../../dao/DAOCategoria.php";

                $daoCategoria = new DAOCategoria();

                $lista = $daoCategoria->getLista();

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