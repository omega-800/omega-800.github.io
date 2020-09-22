<!DOCTYPE html>
<html lang="de" id="hhttmmll">
	<head>
		<?php include ('php/head.php');?>
	</head>
	<body>
		<div class= "wrapper" id="main">
			<main>
				<h1>Login</h1>
				<form onsubmit="return validate();" action="membercheck.php" method="post" name="login">
					<input class="someClass" type="text" name="username" id="username" placeholder="Username">
					<input class="someClass" type="password" name="password" id="password" placeholder="Password">
					<input type="submit" name="submit" id="submit" value="Einloggen">
				</form>
				<p id="error">Bitte füllen Sie alle Felder aus!</p>
			</main>
		</div>
	</body>
        <script>
                function validate(){
                        var error = document.getElementById("error");
                        var pass = document.forms["login"]["password"].value;
                        var name = document.forms["login"]["username"].value;

                        if(name == ""){
                                error.style.visibility="visible";
                                document.getElementById("username").style.backgroundColor="rgba(198, 179, 255, 0.7)";
                        }else{
                                document.getElementById("username").style.backgroundColor="rgba(204, 217, 255, 0.7)";
                        }
                        if(pass == ""){
                                error.style.visibility="visible";
                                document.getElementById("password").style.backgroundColor="rgba(198, 179, 255, 0.7)";
                        }else{
                                document.getElementById("password").style.backgroundColor="rgba(204, 217, 255, 0.7)";
                        }

                        if((pass == "")||(name == "")){
                                return false;
                        }
                }
        </script>
</html>
