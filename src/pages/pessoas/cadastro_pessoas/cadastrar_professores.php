<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar professores</title>
</head>
<body>
<main class="">
<div class="">
    <form method="POST" action="proc_cadastrar_professores.php">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome"><br>
        <label for="cpf">CPF:</label><br>
        <input type="text" name="cpf"><br>
        <label for="senha">Senha:</label><br>
        <input type="password" name="senha"><br>
        <label for="data_nasc">Data Nascimento:</label><br>
        <input type="date" name="data_nasc"><br>
        <label for="email">Email:</label><br>
        <input type="text" name="email"><br>
        <input type="submit" class="btn btn-success" value="Cadastrar">   
    </form>
</div>

</main>
    
</body>
</html>