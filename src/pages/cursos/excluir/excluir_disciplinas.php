<?php
require_once("../../../adm/conexao.php");

$id = $_GET["id"];

$sql = "DELETE FROM disciplinas WHERE id_desciplina = :id LIMIT 1";
$comando = $pdo->prepare($sql);
$comando->bindValue(":id", $id);
$comando->execute();

header("location: ../disciplinas.php");

?>