<?php

    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    $id = $_POST['id'];
    $statement = $pdo->prepare("DELETE FROM logindata WHERE id = ?");
    $ok = $statement->execute([$id]);
    echo json_encode(["ok" => $ok]);