<?php
require_once("../../../adm/conexao.php");

$nome = $_POST["nome"];
$cpf = trim($_POST["cpf"]);
$data_nasc = $_POST["data_nasc"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$tipo_professor = $_POST["tipo_professor"];


$sql = "INSERT INTO pessoas(nome, cpf,data_nasc, telefone, email, tipo_professor, created, modified) VALUES(:nome, :cpf, :data_nasc, :email, NOW(),NOW())";
$comando = $pdo -> prepare($sql);    
$comando -> bindParam(":nome", $nome);
$comando -> bindParam(":cpf", $cpf);
$comando -> bindParam(":data_nasc", $data_nasc);
$comando -> bindParam(":telefone", $telefone);
$comando -> bindParam(":email", $email);
$comando -> bindParam(":tipo_professor", $tipo_professor);

$comando -> execute();
?>
<?php
header("Location: #")

?>