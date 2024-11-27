<?php
// Incluir o arquivo de conexão
require_once('../../../adm/conexao.php'); 

// Verificar se o ID do curso foi passado via GET
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];  // Sanitizando o ID

    // Consultar o curso no banco de dados
    $sql = "SELECT * FROM cursos WHERE id = $id";  // Consulta simples
    $pdo->prepare($sql);


} else {
    // Caso o ID não tenha sido fornecido via GET
    echo "ID do curso não fornecido.";
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Curso</title>
    <!-- Link para o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Curso</h1>

        <!-- Formulário de edição -->
        <form action="../processa/processa_cadastro_cursos.php" method="post">

            <!-- Campo oculto para ID -->
            <input type="hidden" name="id" value="<?php echo $curso['id']; ?>">

            <!-- Campo Descrição -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $curso['descricao']; ?>" required>
                <label for="descricao">Descrição</label>
            </div>

            <!-- Campo Status -->
            <div class="form-floating mb-3">
                <select class="form-select" id="status" name="status" required>
                    <option value="0" <?php echo $curso['status'] == 0 ? 'selected' : ''; ?>>Inativo</option>
                    <option value="1" <?php echo $curso['status'] == 1 ? 'selected' : ''; ?>>Ativo</option>
                </select>
                <label for="status">Status</label>
            </div>

            <!-- Campo Modalidade -->
            <div class="form-floating mb-3">
                <select class="form-select" id="modalidade" name="modalidade" required>
                    <option value="0" <?php echo $curso['modalidade'] == 0 ? 'selected' : ''; ?>>Presencial</option>
                    <option value="1" <?php echo $curso['modalidade'] == 1 ? 'selected' : ''; ?>>EAD</option>
                </select>
                <label for="modalidade">Modalidade</label>
            </div>

            <!-- Campo oculto para data de criação (não editável) -->
            <input type="hidden" id="created" name="created" value="<?php echo$curso['created']; ?>">

            <!-- Campo oculto para data de modificação (atualizada no momento da edição) -->
            <input type="hidden" id="modified" name="modified" value="<?php echo date('Y-m-d H:i:s'); ?>">

            <!-- Botão de salvar alterações com estilo customizado -->
            <button type="submit" class="btn btn-primary"
                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                Salvar Alterações
            </button>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

