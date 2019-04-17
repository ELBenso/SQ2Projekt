<!DOCTYPE html>
<html lang="en" dir="ltr">
        <head>
                <meta charset="utf-8">
                <title></title>
                <script>
                $("#login-button").click(function(event){
                event.preventDefault();

                $('form').fadeOut(500);
                $('.wrapper').addClass('form-success');
                });
                </script>
                <link rel="stylesheet" href="./css/loginseite.css">
        </head>
        <body>
                <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>

		<form class="form">
			<input type="text" placeholder="Username">
			<input type="password" placeholder="Password">
			<button type="submit" id="login-button">Login</button>
		</form>
	</div>
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
        </div>
        </body>
</html>
