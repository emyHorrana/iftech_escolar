<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar alunos</title>
</head>
<body>
<main class="">
<div class="">
    <form method="POST" action="../processa/proc_cadastrar_alunos.php">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome"><br>
        <label for="cpf">CPF:</label><br>
        <input type="text" name="cpf"><br>
        <label for="data_nasc">Data Nascimento:</label><br>
        <input type="date" name="data_nasc"><br>
        <label for="bairro">Bairro:</label><br>
        <input type="text" name="bairro"><br>
        <label for="logradouro">Logradouro:</label><br>
        <input type="text" name="logradouro"><br>
        <label for="num_casa">N° casa:</label><br>
        <input type="text" name="num_casa"><br>
        <label for="uf">UF:</label><br>
        <input type="text" name="uf"><br>
        <label for="telefone">Telefone:</label><br>
        <input type="texr" name="telefone"><br>
        <label for="email">Email:</label><br>
        <input type="texr" name="email"><br>
        <label for="senha">Senha:</label><br>
        <input type="password" name="senha"><br>
        <input type="submit" class="btn btn-success" value="Cadastrar">   
    </form>
</div>

</main>
    
</body>
</html>