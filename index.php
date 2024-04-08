<?php
    session_start();
    include "php/getRecensioni.php";
    $recensioni = getRecensioni();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Recensioni</title>
</head>
<body>
    <h1>Elimina recensioni</h1>
    <?php
        echo $recensioni;
        if(isset($_SESSION["message"])){
            echo $_SESSION["message"];
        }
    ?>
</body>
</html>