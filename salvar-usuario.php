<?php
switch ($_REQUEST["action"]) {
    case "ExibirTodos":

        break;
    case 'Adicionar':
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];
        $email = $_POST["email"];
        $dataDeNascimento = $_POST["dataDeNascimento"];

        $sql = "INSERT INTO usuarios (Nome,  Senha, Email, DataDeNascimento) 
                     VALUES ('{$nome}',  '{$senha}',  '{$email}',  '{$dataDeNascimento}')";

        $res = $conn->query($sql);
        if ($res == true) {
            echo("<h1>Cadastro Realizado com sucesso!</h1>");
        }
        else {
            echo("<h1>Cadastro não realizado!\nErro:</h1>" +  $res);
        }	
        break;
    case "Editar":

        break;
    case "Excluir":

        break;
    default:
}
