<?php
    if(isset($_POST["acao"])){
        require_once "adm/conexao.php";
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        $sql = "select * from alunos where alunos.cpf = :login and alunos.senha = :senha";
        $sql = "select * from professores where professores.cpf = :login and professores.senha = :senha";
        $comando = $pdo -> prepare($sql);
        $comando -> bindParam(":login", $usuario);
        $comando -> bindParam(":senha", $senha);
        $comando -> execute();
        if($comando->rowCount()== 1){
            echo " | Existe esse usuário em sua base de dados!";
            echo ($usuario);
            header("Location: dashboard/dashboard.php");
        }else{
            echo " | Erro! Usuário ou senha incorretos!";
        }

    } else {
        echo "ERRO. ACESSO INDEVIDO";
    }