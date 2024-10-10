<?php
try {
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=if_escolar", "root", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo "Falha na conexão: " . $e->getMessage();

}