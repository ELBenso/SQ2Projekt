<!DOCTYPE html>
<html lang="en" dir="ltr">
        <head>
                <meta charset="utf-8">
                <title>Einstellungen</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="./css/stylesheet.css">
                <link rel="icon" href="./img/logohacken.jpg">
                <script>
                function dropFunction(x) {
                        x.classList.toggle("change");
                }
                </script>
        </head>
        <body>
                <div id="mainpage">
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
                </div>
                </div>
        </body>
</html>
