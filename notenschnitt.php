<!DOCTYPE html>
<html lang="en" dir="ltr">
        <head>
                <meta charset="utf-8">
                <title>Notenschnitt</title>
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
                <div id="notenschnittpage">
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
                <h1>Mein Notenschnitt</h1>
                <div id="dynamic">
                <?php
                $displaynote = 0;
                $displaylp = 0;
                require './php/connection.inc.php';
                $sql = "SELECT lp, note FROM notenliste";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                if ($row["lp"] > 0) {
                        $displaynote = $row["note"] / $row["lp"];
                }
                $displaylp = $row["lp"] + $displaylp;
                echo "Du hast " . $displaylp. " Leistungspunkte und einen Schnitt von " . number_format((float)$displaynote, 2, '.', '')."<br>";
                ?>
                </div>
                <form class="" action="./php/notenschnitt.inc.php" method="post">
                        <span id="schriftns1">Note</span><input type="number" name="note" placeholder="Note..." step="0.01"><br>
                        <span id="schriftns2">ECTS</span><input type="number" name="lp" placeholder="LP..."><br>
                        <input type="submit" name="submit-ns" value="Aktualisieren">
                </form>
                <form id="del" action="./php/del-ns.inc.php" method="post">
                        <input type="submit" name="delete-ns" value="Zurücksetzen">
                </form>
                </div>
                </div>
        </body>
</html>
