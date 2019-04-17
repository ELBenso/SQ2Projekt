<?php
if (isset($_POST['submit-ns'])) {

        require 'connection.inc.php';

        $note = $_POST['note'];
        $lp = $_POST['lp'];

        if((($note < 1.0 || $note > 5.0))) {
                header("Location: ../notenschnitt.php?error=UnmöglicheEingabe");
                exit();
        } else if($lp < 1) {
                header("Location: ../notenschnitt.php?error=UnmöglicheEingabe");
                exit();
        } else {
                $inputnote = $note * $lp;
                $sql = "SELECT lp FROM notenliste;";
                $result = $conn->query($sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                if (false) {
                        $sql = "INSERT INTO notenliste VALUES ($inputnote, $lp);";
                        if ($conn->query($sql) === TRUE) {
                                header("Location: ../notenschnitt.php?success1");
                                exit();
                        } else {
                                header("Location: ../notenschnitt.php?error=sqlerror1");
                                exit();
                        }
                } else {
                        $resultlp = "SELECT lp FROM notenliste;";
                        $resultnote = "SELECT note FROM notenliste;";
                        $input = $resultlp + $lp;
                        $sql = "UPDATE notenliste SET lp = $input;";
                        if ($conn->query($sql) === TRUE) {
                                $input = $resultnote + $lp * $note;
                                $sql = "UPDATE notenliste SET note = $input;";
                                if ($conn->query($sql) === TRUE) {
                                        header("Location: ../notenschnitt.php?success2");
                                        exit();
                                } else {
                                        header("Location: ../notenschnitt.php?error=sqlerror2");
                                        exit();
                                }
                        } else {
                                header("Location: ../notenschnitt.php?error=sqlerror3");
                                exit();
                        }
                }
        }
}
?>
