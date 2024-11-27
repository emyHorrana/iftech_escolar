<?php
require_once("../../../adm/conexao.php");

$id = $_GET["id"];

$sql = "DELETE FROM matrizes_curriculares WHERE id_mat_curricular = :id LIMIT 1";
$comando = $pdo->prepare($sql);
$comando->bindValue(":id", $id);
$comando->execute();

header("location: ../matrizes_curriculares");

?>