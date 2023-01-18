<?php

    $pdo = new PDO('mysql:host=localhost;dbname=onlineshop', 'root', '');
    $statement = $pdo->prepare("SELECT passwort FROM logindata");
    $statement->execute();
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);

?>