<?php
if (isset($_POST['delete-ns'])) {

        require 'connection.inc.php';

        $sql = "UPDATE notenliste SET lp = 0;";
        if ($conn->query($sql) === TRUE) {
                $sql = "DELETE FROM notenliste;";
                if ($conn->query($sql) === TRUE) {
                        header("Location: ../notenschnitt.php?successgelöscht");
                        exit();
                } else {
                        header("Location: ../notenschnitt.php?sqlfehler");
                        exit();
                }
        } else {
                header("Location: ../notenschnitt.php?sqlfehler");
                exit();
        }
}
?>
