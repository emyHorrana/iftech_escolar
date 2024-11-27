<?php

//importar arquivo de conexão\\
require_once("../../../adm/conexao.php");

//preparar e executar o BD a inserção de dados\\
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$status = $_POST['status'];
$modalidade = $_POST['modalidade'];


$sql = "UPDATE cursos SET nome = :nome, descricao=:descricao, `status`=:status, modalidade=:modalidade, modified=NOW()"; 

$comando = $pdo ->prepare($sql);
$comando -> bindParam(":nome", $nome);
$comando -> bindParam(":descricao", $descricao);
$comando -> bindParam(":status", $status);
$comando -> bindParam(":modalidade", $modalidade);

$comando -> execute();
?>

<?php
header("Location: ../index.php");
?>