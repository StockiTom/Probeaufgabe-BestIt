<?php

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Credentials: true");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, X-Custom-Header");
    header('P3P: CP="CAO PSA OUR"'); // Makes IE to support cookies
    header("Content-Type: application/json; charset=utf-8");

    $_POST = json_decode(file_get_contents("php://input"),true);  //CORS ERROR BEHEBUNG

    $pdo = new PDO('mysql:host=localhost;dbname=onlineshop', 'root', '');

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username=$_POST['username'];
        $passwort=$_POST['password'];

        $statement = $pdo->prepare("SELECT * FROM logindata where username=:username and passwort=:passwort");
        //$statement->execute([$username, $passwort]);
        $statement->execute(array(':username' => $username,':passwort' => $passwort));
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        if($data == ""){
            $response="Falscher Benutzer oder Passwort ist falsch";
        }else{
            $response="Success";
        }
        echo json_encode($response);

    }else{
        echo "FALSE";
    }

    

?>