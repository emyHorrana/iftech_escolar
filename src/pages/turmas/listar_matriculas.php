<?php
session_start();
require_once("../../adm/conexao.php");
include_once("../../componentes/topo.php");
//include_once("dashboard/view/principal.php");




$sql = "SELECT * from pessoas";
$comando = $pdo->prepare($sql);

$comando->execute();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        
        <h1>Matriculas</h1>
        <a class="btn btn-sm btn-primary" href="#" >Adicionar nova matricula</a><br><br>
        <div class="table-responsive small">
        <table class="table table-striped table-sm" id="minhaTabela" border="2" width="100%">
            <thead>
                <th>Id</th>
                <th>Nome</th>
                <th>Data Nascimento</th>
                <th>E-mail</th>
                <th>Cidade</th>
                <th>UF</th>
                <th>Editar</th>
                <th>Excluir</th>
            </thead>
            <tbody>
                <?php

                while ($pessoas = $comando->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $pessoas['id']; ?></td>
                        <td><?php echo $pessoas['nome']; ?></td>
                        <td><?php echo empty($pessoas['data_nasc']) ? "" : date('d/m/Y', strtotime($pessoas['data_nasc'])); ?>
                        </td>
                        <td><?php echo $pessoas['email']; ?></td>
                        <td><?php echo $pessoas['cidade']; ?></td>
                        <td><?php echo $pessoas['uf']; ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary"
                                href="editar_pessoas.php?id=<?php echo $pessoas["id"]; ?>">Editar</a>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-danger"
                                href="../../excluir_pessoas.php?id=<?php echo $pessoas["id"]; ?>">Excluir</a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
        </div>
        <script src=https://code.jquery.com/jquery-3.7.1.min.js></script>
        <script src="https://cdn.datatables.net/2.1.2/js/dataTables.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#minhaTabela').DataTable({
                    "language": {
                        "url": "http://cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json"
                    },
                    paging: true
                });
            });
        </script>
    </main>
</body>
<?php 
include_once("../../componentes/footer.php");
?>