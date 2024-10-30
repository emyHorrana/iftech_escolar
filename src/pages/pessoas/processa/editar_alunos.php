<?php

include_once("../../../adm/conexao.php");

if (isset($_GET["id_aluno"]) && is_numeric($_GET["id_aluno"])) {
    $id = (int)$_GET["id_aluno"];
    $sql = "SELECT * FROM alunos WHERE id_aluno = :id_aluno";
    $comando = $pdo->prepare($sql);
    $comando->bindValue(":id_aluno", $id, PDO::PARAM_INT);
    $comando->execute();
    $pessoas = $comando->fetch(PDO::FETCH_ASSOC);
    
    if (!$alunos) {
        header("Location: ../index.php");
        exit;
    }
} else {
    header("Location:  ../index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style_editar.css" rel="stylesheet" type="text/css">
    <title>Editar Pessoas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main>
        <div>
            <form method="POST" action="proc_editar_alunos.php">
                <input type="hidden" name="id_aluno" value="<?php echo htmlspecialchars($pessoas["id_aluno"], ENT_QUOTES, 'UTF-8'); ?>">
                
                <div>
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo htmlspecialchars($pessoas["nome"], ENT_QUOTES, 'UTF-8'); ?>">
                </div>

                <div>
                    <label for="cpf" class="form-label">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo htmlspecialchars($pessoas["cpf"], ENT_QUOTES, 'UTF-8'); ?>">
                </div>

                <div>
                    <label for="senha" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="senha" name="senha">
                </div>

                <div>
                    <label for="data_nasc" class="form-label">Data de Nascimento:</label>
                    <input type="date" class="form-control" id="data_nasc" name="data_nasc" value="<?php echo htmlspecialchars($pessoas["data_nasc"], ENT_QUOTES, 'UTF-8'); ?>">
                </div>

                <div>
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($pessoas["email"], ENT_QUOTES, 'UTF-8'); ?>">
                </div>

                <div>
                    <label for="cidade" class="form-label">Cidade:</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo htmlspecialchars($pessoas["cidade"], ENT_QUOTES, 'UTF-8'); ?>">
                </div>

                <div>
                    <label for="uf" class="form-label">UF:</label>
                    <input type="text" class="form-control" id="uf" name="uf" value="<?php echo htmlspecialchars($pessoas["uf"], ENT_QUOTES, 'UTF-8'); ?>">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Concluído</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>