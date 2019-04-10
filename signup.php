<!DOCTYPE html>
<html lang="en" dir="ltr">
        <head>
                <meta charset="utf-8">
                <title></title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="./css/stylesheet.css">
        </head>
        <body>
                <div id="content">
                        <h1>REGISTRIERUNGS BEREICH</h1>
                        <form action="php/signup.inc.php" method="POST">
                        <input type="username" name="username" placeholder="Benutzername">
                        <br>
                        <input type="email" name="email" placeholder="Email">
                        <br>
                        <input type="password" name="password1" placeholder="Passwort">
                        <br>
                        <input type="password" = name="password2" placeholder="Passwort Wiederholen">
                        <br>
                        <button type="submit" name="signup-submit">Registrieren</button>
                </form>
                </div>
        </body>
</html>
