<!DOCTYPE html>
<html lang="en" dir="ltr">
        <head>
                <meta charset="utf-8">
                <title>Login</title>
                <link rel="stylesheet" href="./css/stylesheet.css">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="icon" href="./img/logohacken.jpg">
        </head>
        <body>
                <div id="content">
                <div class="container">
                        <h1>LOGIN BEREICH</h1>
                        <form action="php/login.inc.php" method="POST">
                        <input type="username" name="username" placeholder="Benutzername">
                        <br>
                        <input type="password" = name="password" placeholder="Passwort">
                        <br>
                        <button type="submit" name="login-submit">Einloggen</button>
                        <form action="index.php">
                                <input type="submit" name="skip" value="Überspringen">
                        </form>
                </form>
                </div>
                </div>
        </body>
</html>
