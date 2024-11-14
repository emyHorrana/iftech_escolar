<?php
//importar arquivo de conexão\\
    require_once("../../../adm/conexao.php");

    //preparar e executar o BD a inserção de dados\\
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];
    $modalidade = $_POST['modalidade'];


    //criptografia
    $sql = "INSERT INTO cursos (nome, descricao, `status`, modalidade, created, modified) 
                        VALUES (:nome, :descricao, :status, :modalidade, NOW(), NOW())";

    $comando = $pdo ->prepare($sql);
    $comando -> bindParam(":nome", $nome);
    $comando -> bindParam(":descricao", $descricao);
    $comando -> bindParam(":status", $status);
    $comando -> bindParam(":modalidade", $modalidade);
    $comando -> execute();
    echo $modalidade;
    echo $status;
?>

<?php
    header("Location: ../index.php");
?>