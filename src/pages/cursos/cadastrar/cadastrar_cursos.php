<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cursos</title>
    <!-- Link para o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h1 class="mb-4">Cadastro de Cursos</h1>
        <form action="../processa/processa_cadastro_cursos.php" method="post">
            
            <!-- Campo de Descrição -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Exemplo: Informática" required>
                <label for="descricao">Descrição</label>
            </div>

            <!-- Campo de Status -->
            <div class="form-floating mb-3">
                <select class="form-select" id="status" name="status" required>
                    <option value="0">Inativo</option>
                    <option value="1">Ativo</option>
                </select>
                <label for="status">Status</label>
            </div>

            <!-- Campo de Modalidade -->
            <div class="form-floating mb-3">
                <select class="form-select" id="modalidade" name="modalidade" required>
                    <option value="0">Presencial</option>
                    <option value="1">EAD</option>
                </select>
                <label for="modalidade">Modalidade</label>
            </div>
            <!-- Botão de envio -->
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <!-- Script para incluir o JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
