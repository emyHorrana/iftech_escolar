<?php 

include_once("../../../adm/conexao.php");

if (isset($_GET["id"])){
  $sql = "SELECT * FROM matrizes_curriculares WHERE id_mat_curricular = :id";
  $comando = $pdo -> prepare($sql);
  $comando -> bindValue(":id", $_GET["id"]);
  $comando -> execute();
  $pessoas= $comando -> fetch();
}else {
  header("Location: ../matrizes_curriculares.php");
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastrar</title>
</head>
<body>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div 
    class="d-flex justify-content-between flex-wrap
           flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <form method="POST" action= "../processa/processa_cadastro_matrizes.php">
    <label for="nome">PPC:</label><br>
    <input type="text" name="ppc" size="50" value =" <?php echo $pessoas ["ppc"];
    ?> "/> <br><br>
     <label for="ano">Ano</label>
     <input type="number" id="ano" name="ano" required value =" <?php echo $pessoas ["ppc"]
    ?> "/> <br><br>
    
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href = "../matrizes_curriculares.php" class="btn btn-danger">Cancelar</a>
</div>

  </div>

 
</main>

</body>
</html>