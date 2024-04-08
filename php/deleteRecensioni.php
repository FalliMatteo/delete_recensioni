<?php
    session_start();
    include "connect.php";
    $connection = connectMySQL();
    if(isset($_POST["recensioni"])){
        $recensioni = $_POST["recensioni"];
        $n = count($recensioni)-1;
        $sql = "DELETE FROM recensione WHERE ";
        for($i=0; $i<$n; $i++){
            $sql .= "idrecensione = " . $recensioni[$i] . " OR ";
        }
        $sql .= "idrecensione = " . $recensioni[$n];
        $connection->query($sql);
        if($connection->affected_rows > 0){
            $_SESSION["message"] = "<p>Recensioni eliminate</p>";
        }else{
            $_SESSION["message"] = "<p class='error'>Nessuna recensione eliminata</p>";
        }
    }else{
        $_SESSION["message"] = "<p class='error'>Nessuna recensione selezionata</p>";
    }
    header("Location: ../index.php");
?>