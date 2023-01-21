<?php

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Credentials: true");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, X-Custom-Header");
    header('P3P: CP="CAO PSA OUR"'); // Makes IE to support cookies
    header("Content-Type: application/json; charset=utf-8");

    $_POST = json_decode(file_get_contents("php://input"),true);  //CORS ERROR BEHEBUNG

    //$pdo = new PDO('mysql:host=localhost;dbname=onlineshop', 'root', '');

    $statement = $pdo->prepare("SELECT * FROM products");
    //$statement->execute([$username, $passwort]);
    $statement->execute();
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($data);
?>