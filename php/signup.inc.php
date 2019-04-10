<?php

if (isset($_POST['signup-submit'])) {

        require 'connection.inc.php';

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        if (empty($username) || empty($email) || empty($password1) || empty($password2)) {
                header("Location: ../signup.php?error=LeeresFeld");
                exit();
        } else if ($password1 !== $password2) {
                header("Location: ../signup.php?error=PasswortStimmtNichtÜberein");
                exit();
        } else {

                $sql = "SELECT * FROM benutzer WHERE username=?;";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: ../signup.php?error=sqlerror");
                        exit();
                } else {
                        mysqli_stmt_bind_param($stmt, "s", $username);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);
                        $resultCheck = mysqli_stmt_num_rows($stmt);
                        if ($resultCheck > 0) {
                                header("Location: ../signup.php?error=nameexists".$username);
                                exit();
                        } else {
                                $sql = "INSERT INTO benutzer (username, email, password) VALUES (?, ?, ?);";
                                $stmt = mysqli_stmt_init($conn);
                                if (!mysqli_stmt_prepare($stmt, $sql)) {
                                        header("Location: ../signup.php?error=sqlerror");
                                        exit();
                                } else {
                                        $hashPassword = password_hash($password, PASSWORD_DEFAULT);

                                        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashPassword);
                                        mysqli_stmt_execute($stmt);
                                        header("Location: ../signup.php?signup=success");
                                        exit();
                                }
                        }
                }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
}

 ?>
