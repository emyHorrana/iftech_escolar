<?php
require_once("../../../adm/conexao.php");

$nome = $_POST["nome"];
$cpf = trim($_POST["cpf"]);
$senha = $_POST["senha"];
$data_nasc = $_POST["data_nasc"];
$email = $_POST["email"];
$cidade = $_POST["cidade"];
$logradouro = $_POST["logradouro"];
$bairro = $_POST["bairro"];
$num_casa = $_POST["num_casa"];
$telefone = $_POST["telefone"];


$senha_hash = hash('sha256', $senha);
$sql = "INSERT INTO pessoas(nome, cpf,senha,data_nasc,email, cidade, uf, created, modified) VALUES(:nome, :cpf, :senha, :data_nasc, :email, :cidade, :uf, NOW(),NOW())";
$comando = $pdo -> prepare($sql);    
$comando -> bindParam(":nome", $nome);
$comando -> bindParam(":cpf", $cpf);
$comando -> bindParam(":senha", $senha);
$comando -> bindParam(":data_nasc", $data_nasc);
$comando -> bindParam(":email", $email);
$comando -> bindParam(":cidade", $cidade);
$comando -> bindParam(":uf", $uf);

$comando -> execute();
?>
<?php
header("Location: #")

?>