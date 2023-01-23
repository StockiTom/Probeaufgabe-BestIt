<?php 

    /**Description: Config gengen CORS ERROR und PDO wird mit eingestellten PDO Daten erstellt */


    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Credentials: true");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, X-Custom-Header");
    header('P3P: CP="CAO PSA OUR"'); // Makes IE to support cookies
    header("Content-Type: application/json; charset=utf-8");

    $_POST = json_decode(file_get_contents("php://input"),true);  //CORS ERROR BEHEBUNG


    $username='user_onlineshop';
    $password='1234';

    $pdo = new PDO("mysql:host=localhost;dbname=onlineshop", $username, $password);

?>