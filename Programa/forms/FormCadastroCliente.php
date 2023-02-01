<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" type="text/css" href="../estilos/menu.css">
    <link rel="stylesheet" type="text/css" href="../estilos/estilo.css">

    <?php
        require_once "../dao/DAOEstado.php";
        $daoEstado = new DAOEstado();
        $lista = $daoEstado->getLista();
        $opcoes = '';
        foreach ($lista as $linha) {
            $opcoes .= '<option value ="' . $linha['idEstado'] . '">' . $linha['uf'] . '</option>';
        }
    ?>
</head>

<body>
    <header>
        <div id="logo">
            <img src="../imagens/logo1.png" alt="Automatic: para uma gestão 100% automática">
        </div>
        <nav>
            <ul class="menu">
                <li>
                    Cadastrar
                    <ul class="submenu">
                        <li><a href="forms/FormCadastroCliente.php">Cliente</a></li>
                        <li><a href="forms/FormCadastroEndereco.php">Endereço</a></li>
                        <li><a href="forms/FormCadastroFornecedor.php">Fornecedor</a></li>
                        <li><a href="forms/FormCadastroFuncionario.php">Funcionario</a></li>
                        <li><a href="forms/FormCadastroCategoria.php">Grupo</a></li>
                        <li><a href="forms/FormCadastroLogin.php">Login</a></li>
                        <li><a href="forms/FormCadastroProduto.php">Produto</a></li>
                        <li><a href="forms/FormCadastroRamo.php">Ramo de Atividade</a></li>
                        <li><a href="forms/FormCadastroSubGrupo">SubGrupo</a></li>
                        <li><a href="forms/FormCadastroUnidadeMedida.php">Unidade Medida</a></li>
                    </ul>
                </li>
                <li>
                    Gerenciar
                    <ul class="submenu">
                        <li><a href="">Contas</a></li>
                        <li><a href="">Entregas</a></li>
                        <li><a href="">Estoque</a></li>
                        <li><a href="">Financeiro</a></li>
                    </ul>
                </li>
                <li>
                    Listas
                    <ul class="submenu">
                        <li><a href="">Cliente</a></li>
                        <li><a href="">Compra</a></li>
                        <li><a href="">Fornecedor</a></li>
                        <li><a href="">Funcionario</a></li>
                        <li><a href="">Endereço</a></li>
                        <li><a href="">Grupo</a></li>
                        <li><a href="">Login</a></li>
                        <li><a href="">Produto</a></li>
                        <li><a href="">Ramo de Atividade</a></li>
                        <li><a href="">SubGrupo</a></li>
                        <li><a href="">Unidade Medida</a></li>
                        <li><a href="">Venda</a></li>
                    </ul>
                </li>
                <li>
                    Operações
                    <ul class="submenu">
                        <li><a href="">Compra</a></li>
                        <li><a href="">Venda</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">Sobre</a>
                </li>
            </ul>
        </nav>
    </header>
    <div id="wrap">
        <h1>Cadastro de Cliente</h1>
        <p>Preencha os dados a seguir:</p>
        <form action="../cadastros/CadastroCliente.php" method="POST">

            <label for="nomeCliente">Nome: </label>
            <input type="text" name="nomeCliente" id=nomeCliente>
            <br>

            <label for="emailCliente">Email: </label>
            <input type="email" name="emailCliente" id=emailCliente>
            <br>

            <label for="telefoneCliente">Telefone: </label>
            <input type="tel" name="telefoneCliente" id=telefoneCliente>
            <br>

            <label for="cpfCliente">CPF: </label>
            <input type="text" name="cpfCliente" \
			pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \
			title="Digite um CPF no formato: xxx.xxx.xxx-xx">
		    <input type="submit" value="Verificar">
            <br>

            <label for="sexoCliente">Sexo: </label>
            <select name="sexoCliente" id="sexoCliente">
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select>
            <br>

            <label for="dataNascimentoCliente">Data de Nascimento: </label>
            <input type="date" name="dataNascimentoCliente" id=dataNascimentoCliente>
            <br>

            <label for="estadoCliente">Estado: </label>
            <select name="estadoCliente" id="estadoCliente">
                <?php
                    echo $opcoes;
                ?>
            </select>
            <br>

            <a href="ListaEndereco.php" target="_blank">lista de endereços</a>
            <a href="FormCadastroEndereco.php" target="_blank">Adicionar endereço</a>
            <br>

            <button type="submit">Salvar</button>
        </form>
    </div>
</body>

</html>