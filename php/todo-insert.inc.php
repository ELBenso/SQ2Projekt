<?php
        require 'connection.inc.php';

        if (isset($_POST['submit-todo'])) {
                $task = $_POST['task'];

                mysqli_query($conn, "INSERT INTO todolist(task) VALUES ('$task');");
                header("Location: ../indextodo.php");
        }

        $tasks = mysqli_query($conn, "SELECT * FROM todolist;");
?>
