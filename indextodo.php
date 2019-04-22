<!DOCTYPE html>
<html lang="en" dir="ltr">
        <head>
                <meta charset="utf-8">
                <title>Home</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="./css/stylesheet.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="icon" href="./img/logohacken.jpg">
                <script>
                function dropFunction(x) {
                        x.classList.toggle("change");
                }
                </script>
                </script>
        </head>
        <body>
                <div id="indexpage">
                <div class="container">
                        <div class="menu" onclick="dropFunction(this)">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                                <ul id="dropdown">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="statistik.php">Statistik</a></li>
                                        <li><a href="motivation.php">Motivation</a></li>
                                        <li><a href="notenschnitt.php">Notenschnitt</a></li>
                                        <li><a href="einstellungen.php">Einstellungen</a></li>
                                </ul>
                        </div>
                        <section id="list">
                                <form class="" action="./php/todo-insert.inc.php" method="post">
                                        <input type="text" name="task" placeholder="Was möchtest du als nächstes tun?...">
                                        <button type="submit" name="submit-todo" class="addBtn">+</button>
                                </form>
                                <table style="width: 60%">
                                        <thead>
                                                <tr>
                                                        <th style="width: 80%">Task</th>
                                                        <th style="width: 10%">Wichtig</th>
                                                        <th style="width: 10%">Action</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <?php $i = 1;
                                                        require './php/todo-insert.inc.php';
                                                        while ($row = mysqli_fetch_array($tasks)) {  ?>
                                                                <tr>
                                                                        <td class="task"><?php echo $row['task']; ?></td>
                                                                        <td class="fa fa-bell-o" style="font-size:20px" ></td>
                                                                        <td class="delete"><a href="./php/todo-delete.inc.php?del_task=<?php echo $row['nr'];?>">x</a></td>
                                                                </tr>
                                                        <?php $i++; } ?>
                                        </tbody>
                                </table>
                        </section>
                </div>
                </div>
        </body>
</html>
