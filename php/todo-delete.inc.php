<?php
        require 'connection.inc.php';

        if(isset($_GET['del_task'])) {
                $nr = $_GET['del_task'];
                mysqli_query($conn, "DELETE FROM todolist WHERE nr=$nr");
                header("Location: ../indextodo.php");
        }

 ?>
