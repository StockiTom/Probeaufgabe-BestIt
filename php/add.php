<?php

$pdo = new PDO('mysql:host=localhost;dbname=onlineshop', 'root', '');


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, X-Custom-Header");
header('P3P: CP="CAO PSA OUR"'); // Makes IE to support cookies
header("Content-Type: application/json; charset=utf-8");

$_POST = json_decode(file_get_contents("php://input"),true);  //CORS ERROR BEHEBUNG

if(isset($_POST['username']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $passwort = $_POST['password'];
    
    //$statement = $pdo->prepare("INSERT INTO logindata (UserName, FirstName, LastName, Email, Passwort) VALUES (:username, :firstname, :lastname, :email, :passwort)");
    $statement = $pdo->prepare("INSERT INTO logindata (UserName, FirstName, LastName, Email, Passwort) VALUES (?, ?, ?, ?, ?)");
    $ok = $statement->execute([$username, $firstname, $lastname, $email, $passwort]);

    echo json_encode(["ok" => $ok]);

}else{
    echo "FALSE";
}


?>