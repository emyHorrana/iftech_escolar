<?php

    //importar arquivo de conexão\\
    require_once("../../../adm/conexao.php");

    //preparar e executar o BD a edição de dados\\
   
    $nome= $_POST['nome'];

    var_dump($nome);


    //criptografia
  
    $sql = "UPDATE disciplinas SET nome = :nome, modified = NOW()";
    $comando = $pdo ->prepare($sql);
    $comando -> bindParam(":nome", $nome);
    $comando -> execute();
?>

<?php
    header("Location: ../disciplinas.php");
?>