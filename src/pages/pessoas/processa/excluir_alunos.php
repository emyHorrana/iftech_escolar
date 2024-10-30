<?php

require_once "../../../adm/conexao.php";

$id_aluno = $_GET["id_aluno"];

$sql = "DELETE FROM alunos WHERE id_aluno = :id_aluno LIMIT 1"; //edita registros com status 1
$comando = $pdo->prepare($sql);
$comando->bindValue(":id_aluno", $id_aluno);
$comando->execute();

?>
<script>

alert ('OK! Excluído!');
window.location.href="../listagem_pessoas/listar_alunos.php";

</script>
