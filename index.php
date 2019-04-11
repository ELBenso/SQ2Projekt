<!DOCTYPE html>
<html lang="en" dir="ltr">
        <head>
                <meta charset="utf-8">
                <title>Home</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="./css/stylesheet.css">
                <script>
                function dropFunction(x) {
                        x.classList.toggle("change");
                }
                function newProject(x) {
                        x.classList.toggle("addproject");
                }
                </script>
        </head>
        <body>
                <div class="container">
                        <div class="menu" onclick="dropFunction(this)">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                        </div>
                        <button id="projektstatus" onclick="newProject(this)">Neue Aufgabe</button>
                        <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                        </ul>
                </div>
        </body>
</html>
