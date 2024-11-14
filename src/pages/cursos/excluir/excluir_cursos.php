<?php
require_once("../../../adm/conexao.php");

$id = $_GET["id"];

$sql = "DELETE FROM cursos WHERE id_curso = :id LIMIT 1";
$comando = $pdo->prepare($sql);
$comando->bindValue(":id", $id);
$comando->execute();

header("location: ../index.php");

?>