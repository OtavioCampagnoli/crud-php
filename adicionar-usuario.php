<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Usuário</title>
</head>

<body>
    <h1>Adicionar Usuário</h1>
    
    <form action="?page=Salvar" method="POST">
        <div class="container">
            <input type="hidden" name="action" value="Adicionar">
            <div class="row">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" aria-describedby="nome" minlength="3" required>
                    <div id="namelHelp" class="form-text">Por gentileza informe seu nome completo</div>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                    <input type="checkbox" class="form-check-input" id="exibirsenha">
                    <label class="form-check-label" for="exibirsenha">mostrar</label>
                </div>
                <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                <label for="dataDeNascimento" class="form-label">Data de Nascimento</label>
                    <input type="date" name="dataDeNascimento" class="form-control" id="dataDeNascimento" required>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </form>

</body>

</html>