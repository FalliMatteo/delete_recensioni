<?php
    include "connect.php";
    function getRecensioni(){
        $connection = connectMySQL();
        $result = $connection->query("SELECT * FROM recensione");
        if($result->num_rows > 0){
            $string = "<form action='php/deleteRecensioni.php' method='post'><table id='recensioni'><tr><th>ID</th><th>Voto</th><th>Data</th><th>Utente</th><th>Ristorante</th><th>Elimina</th></tr>";
            while($row = $result->fetch_assoc()){
                $string .= "<tr><td>" . $row["idrecensione"] . "</td><td>" . $row["voto"] . "</td><td>" . $row["data"] . "</td><td>" . $row["idutente"] . "</td><td>" . $row["codiceristorante"] . "</td><td><input type='checkbox' name='recensioni[]' value='" . $row["idrecensione"] . "'></td></tr>";
            }
            $string .= "</table><br><button type='submit'>Elimina</button></form>";
        }else{
            $string = "<p>Nessuna recensione presente nel database</p>";
        }
        return $string;
    }
?>