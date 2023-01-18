<?php

    $pdo = new PDO('mysql:host=localhost;dbname=onlineshop', 'root', '');

    $data = [
        'username' => $_POST['username'],
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'email' => $_POST['email'],
        'passwort' => $_POST['password'] 
    ];
    
    $statement = $pdo->prepare("INSERT INTO logindata (UserName, FirstName, LastName, Email, Passwort) VALUES (:username, :firstname, :lastname, :email, :passwort)");
    $ok = $statement->execute([$data]);
    echo json_encode(["ok" => $ok]);
    

?>