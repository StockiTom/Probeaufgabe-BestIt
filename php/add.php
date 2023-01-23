<?php

    /**Description: add.php wird verwendet um einen neuen Benutzer in der Datenbank (Tabelle logindata) anzulegen */

    require('config.php');

    if(isset($_POST['username']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $passwort = $_POST['password'];
        
        /**Überprüfung ob es diesen Benutzer schon gibt oder nicht */
        $statement = $pdo->prepare("SELECT * FROM logindata where username=:username");
        $statement->execute(array(':username' => $username));
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        if($data==null){
            /***Benutzer wird mittels der POST-Daten in der Tabelle logindata angelegt */
            $statement = $pdo->prepare("INSERT INTO logindata (UserName, FirstName, LastName, Email, Passwort) VALUES (?, ?, ?, ?, ?)");
            $ok = $statement->execute([$username, $firstname, $lastname, $email, $passwort]);
    
            echo true;
        }else{
            echo false;
        }


    }else{
        echo "FALSE";
    }

?>