<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Usuários</title>
    <link href="lib/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="?page=#">Cadastro de Usuários</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="?page=ExibirTodos">Exibir Todos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=Adicionar">Adicionar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=Editar">Editar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=Excluir">Excluir</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-mt-8 col-sm-3">
                <?php
                include("config.php"); //Arquivo de Conexão com o Banco de Dados
                switch (@$_REQUEST["page"]) {
                    case "ExibirTodos":
                        include "exibir-todos.php";
                        break;
                    case "Salvar":
                        include "salvar-usuario.php";
                        break;
                    case "Adicionar":
                        include "adicionar-usuario.php";
                        break;
                    case "Editar":
                        include "editar-usuario.php";
                        break;
                    case "Excluir":
                        include "excluir-usuario.php";
                        break;
                    default:
                        print "<h1>Seja Bem-vindo!</h1>";
                }
                ?>
            </div>
        </div>

    </div>
    <script src="lib/js/bootstrap.bundle.min.js"></script>
</body>

</html>