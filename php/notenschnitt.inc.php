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
                $check = "SELECT lp FROM notenliste;";
                $row = mysqli_fetch_assoc($check);
                $sql = "SELECT lp FROM notenliste WHERE lp > 0;";
                $result = $conn->query($sql);
                $num_rows = mysqli_num_rows($result);
                if ($num_rows == 0 && $row["lp"] == NULL) {
                        $sql = "INSERT INTO notenliste VALUES ($inputnote, $lp);";
                        if ($conn->query($sql) === TRUE) {
                                header("Location: ../notenschnitt.php?success1");
                                exit();
                        } else {
                                header("Location: ../notenschnitt.php?error=sqlerror1");
                                exit();
                        }
                } else {
                        $sql = "UPDATE notenliste SET lp = lp + $lp;";
                        if ($conn->query($sql) == TRUE) {
                                $input = $lp * $note;
                                $sql = "UPDATE notenliste SET note = note + $input;";
                                if ($conn->query($sql) == TRUE) {
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
