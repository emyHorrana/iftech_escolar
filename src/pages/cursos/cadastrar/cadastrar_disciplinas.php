<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Disciplinas</title>
    <!-- Link para o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h1 class="mb-4">Cadastro Disciplinas</h1>
        <form action="../processa/processa_cadastro_disciplinas.php" method="post">
            
            <!-- Campo de Nome -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Exemplo: Curso de Informática" required>
                <label for="nome">Nome</label>
            </div>

    

            <!-- Botão de envio -->
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button hrelf = "../disciplinas.php" class="btn btn-danger">Cancelar</button>
        </form>
    </div>

    <!-- Script para incluir o JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

