<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Principal de Matrizes</title>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: Arial, sans-serif;
        }
        h2 {
            color: #4CAF50;
        }
        p {
            font-size: 1.1em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Página Principal de Matrizes</h2>
        <?php
          //importar arquivo de conexão\\
    require_once("../../../adm/conexao.php");
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $ppc = htmlspecialchars($_POST['ppc']);
                $ano = htmlspecialchars($_POST['ano']);

                echo "<p><strong>PPC:</strong> $ppc</p>";
                echo "<p><strong>Ano:</strong> $ano</p>";
            } else {
                echo "<p>Nenhum dado foi enviado.</p>";
            }
        ?>
        <a href="../matrizes_curriculares.php">Voltar ao Formulário</a>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ppc = $_POST['ppc'];
    $ano = $_POST['ano'];

    $sql = "INSERT INTO matrizes_curriculares (ppc, ano,created, modified) VALUES (:ppc, :ano, NOW(), NOW())";

$comando = $pdo ->prepare($sql);
$comando -> bindParam(":ppc", $ppc);
$comando -> bindParam(":ano", $ano);
$comando -> execute();



    echo "Dados recebidos:<br>";
    echo "PPC: " . htmlspecialchars($ppc) . "<br>";
    echo "Ano: " . htmlspecialchars($ano);



}
?>
    </div>
</body>
</html>
