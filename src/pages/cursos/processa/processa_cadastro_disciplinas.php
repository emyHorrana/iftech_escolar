<?php
//importar arquivo de conexão\\
    require_once("../../../adm/conexao.php");

    //preparar e executar o BD a inserção de dados\\
    $nome = $_POST['nome'];
    


    //criptografia
    $sql = "INSERT INTO disciplinas (nome, created, modified) 
                        VALUES (:nome, NOW(), NOW())";

    $comando = $pdo ->prepare($sql);
    $comando -> bindParam(":nome", $nome);
    $comando -> execute();
   
?>

<?php
    header("Location: ../disciplinas.php");
?>