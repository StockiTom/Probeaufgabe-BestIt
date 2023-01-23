<?php

    /**Description: get_products.php wird um alle Produkte der Tabelle products anzuzeigen  */
    require('config.php');

    $statement = $pdo->prepare("SELECT * FROM products");
    $statement->execute();
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($data);
?>