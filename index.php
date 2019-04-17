<!DOCTYPE html>
<html lang="en" dir="ltr">
        <head>
                <meta charset="utf-8">
                <title>Home</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="./css/stylesheet.css">
                <link rel="icon" href="./img/logohacken.jpg">
                <script>
                function dropFunction(x) {
                        x.classList.toggle("change");
                }
                // Create a "close" button and append it to each list item
                var myNodelist = document.getElementsByTagName("LI");
                var i;
                for (i = 0; i < myNodelist.length; i++) {
                        var span = document.createElement("SPAN");
                var txt = document.createTextNode("\u00D7");
                span.className = "close";
                span.appendChild(txt);
                myNodelist[i].appendChild(span);
                }

                // Click on a close button to hide the current list item
                var close = document.getElementsByClassName("close");
                var i;
                for (i = 0; i < close.length; i++) {
                        close[i].onclick = function() {
                                var div = this.parentElement;
                                div.style.display = "none";
                        }
                }

                // Add a "checked" symbol when clicking on a list item
                var list = document.querySelector('ul');
                list.addEventListener('click', function(ev) {
                        if (ev.target.tagName === 'LI') {
                                ev.target.classList.toggle('checked');
                        }
                }, false);

                // Create a new list item when clicking on the "Add" button
                function newElement() {
                        var li = document.createElement("li");
                        var inputValue = document.getElementById("myInput").value;
                        var t = document.createTextNode(inputValue);
                        li.appendChild(t);
                        if (inputValue === '') {
                                alert("Das Feld darf nicht leer bleiben!");
                        } else {
                                document.getElementById("myUL").appendChild(li);
                        }
                        document.getElementById("myInput").value = "";

                        var span = document.createElement("SPAN");
                        var txt = document.createTextNode("\u00D7");
                        span.className = "close";
                        span.appendChild(txt);
                        li.appendChild(span);

                        for (i = 0; i < close.length; i++) {
                        close[i].onclick = function() {
                        var div = this.parentElement;
                        div.style.display = "none";
                        }
                        }
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
                        <section id="list">
                        <div id="myDIV" class="header">
                          <input type="text" id="myInput" placeholder="Was möchtest du als nächstes tun?..." class="listInput">
                          <span onclick="newElement()" class="addBtn">↓</span>
                        </div>
                        <ul id="myUL">
                        </ul>
                        </section>
                </div>
                </div>
        </body>
</html>
