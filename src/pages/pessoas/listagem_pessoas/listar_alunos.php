<?php

require_once("../../../adm/conexao.php");
$sql = "SELECT * from alunos";
$comando = $pdo -> prepare($sql);
$comando -> execute();
//inserir estrutura básica HTML
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar alunos</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.min.css">
</head>
<body>
    <h1> Listar registros do BD </h1>
    <a class="btn btn-success" href="../cadastro_pessoas/cadastrar_alunos.php"> Adicionar novo registro </a><br><br>

    <table id="minhaTabela" border="1" width = "100%">
        <thead>
            <th> Nome</th>
            <th> CPF </th>
            <th> Configurações</th>
        </thead>
    <tbody>
        <?php
        while($alunos = $comando -> fetch (PDO :: FETCH_ASSOC)){ ?>

        <tr>
            <td><?php echo $alunos['nome'] ?> </td>
            <td><?php echo $alunos ['cpf']; ?> </td>
            <td>
            <a class="btn btn-primary" href="../../financeiro/plano_contas.php?id=<?php echo $alunos["id_aluno"]; ?>">Contas</a>
                <a class="btn btn-primary" href="../processa/editar_alunos.php?id=<?php echo $alunos["id_aluno"]; ?>">Editar</a>
                <a class="btn btn-danger" href="../processa/excluir_alunos.php?id=<?php echo $alunos["id_aluno"]; ?>">Excluir</a>
                <a class="btn btn-danger" href="#?id=<?php echo $alunos["id_aluno"]; ?>">detal</a>
            </td>
            <td>
                
            </td>
            <td>
                
            </td>  
        </tr>
        <?php }?>
</tbody>
</table>
<script src=https://code.jquery.com/jquery-3.7.1.min.js></script>
<script src="https://cdn.datatables.net/2.1.2/js/dataTables.min.js"></script>
<script type="text/javascript">

    $(document).ready(function() {
        $('#minhaTabela').DataTable({
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json"
            },
            paging: true
        });
    });
</script>
</body>

</html>