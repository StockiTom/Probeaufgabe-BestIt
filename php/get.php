<?php

    /**Description: get.php wird verwendet ob die Logindaten (POST) richtig sind  */

    require('config.php');

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username=$_POST['username'];
        $passwort=$_POST['password'];

        /***Überprüfung ob Daten in der Tabelle in der Tabelle */
        $statement = $pdo->prepare("SELECT * FROM logindata where username=:username and passwort=:passwort");
        $statement->execute(array(':username' => $username,':passwort' => $passwort));
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        /***Wenn die Logindaten Kombi in der Tabelle zufinden ist Succes else Unsuccess  */
        if($data == null){
            $response="Unsuccessed";
        }else{
            $response="Success";
        }
        echo json_encode($response);

    }else{
        echo "FALSE";
    }

?>