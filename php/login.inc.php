<?php

        if(isset($_POST['login-submit'])) {

                require 'connection.inc.php';

                $username = $_POST['username'];
                $password = $_POST['password'];

                if (empty($username) || empty($password)) {
                        header("Location: ../login.php?error=LeeresFeld");
                        exit();
                } else {
                        $sql = "SELECT * FROM benutzer WHERE username = ?;";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                                header("Location: ../login.php?error=sqlerror");
                                exit();
                        } else {
                                mysqli_stmt_bind_param($stmt, "s", $username);
                                mysqli_stmt_execute($stmt);
                                $result = mysqli_stmt_get_result($stmt);
                                if ($row = mysqli_fetch_assoc($result)) {
                                        $pwdcheck = password_verify($password, $row['password']);
                                        if ($pwdcheck == false) {
                                                header("Location: ../login.php?error=FalschesPasswort");
                                                exit();
                                        } else {
                                                session_start();
                                                $_SESSION['userId'] = $row['id'];
                                                $_SESSION['userUid'] = $row['username'];

                                                header("Location: ../index.php?LoginSuccess");
                                                exit();
                                        }
                                } else {
                                        header("Location: ../home.php?error=KollegenNichtGefunden");
                                        exit();
                                }
                        }
                }
        } else {
                header("Location: ../index.php");
                exit();
        }

?>
