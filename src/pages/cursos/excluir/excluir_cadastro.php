<?php
require_once("adm/conexao.php");

$id = $_GET["id"];

//$sql = "DELETE FROM pessoas WHERE id = :id LIMIT 1";
$sql = "DELETE FROM pessoas WHERE id = :id LIMIT 1";
$comando = $pdo->prepare($sql);
$comando->bindValue(":id", $id);
$comando->execute();

//header("location: listar.php");

if ($comando):
    echo "<script> alert('Registro Excluido com sucesso!'); window.location.href='listar.php'; </script>";
else:
    echo "<script> alert('Erro ao excluir registro!'); window.location.href='listar.php'; </script>";
endif;

?>