<?php
//importar arquivo de conexão\\
    require_once("../../../adm/conexao.php");

    //preparar e executar o BD a inserção de dados\\
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];
    $modalidade = $_POST['modalidade'];


    //criptografia
    $sql = "INSERT INTO cursos (descricao, `status`, modalidade, created, modified) 
                        VALUES (:descricao, :status, :modalidade, NOW(), NOW())";

    $comando = $pdo ->prepare($sql);
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