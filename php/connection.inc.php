<?php
        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "sq2projekt";

        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
        if (!$conn) {
                die("Verbindung fehlgeschlagen: ".mysqli_connect_error());
        }
?>
