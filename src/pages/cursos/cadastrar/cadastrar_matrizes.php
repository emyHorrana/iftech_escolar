<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário Simplificado</title>
    <style>
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: Arial, sans-serif;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            margin-top: 15px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Cadastro de PPC e Ano</h2>
    <form action="../processa/processa_cadastro_matrizes.php" method="post">
        <label for="ppc">PPC</label>
        <input type="text" id="ppc" name="ppc" required>

        <label for="ano">Ano</label>
        <input type="number" id="ano" name="ano" required>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>