<?php require_once("functions.php"); ?>

<?php
if (isset($_POST["submit_o"]))	
	if (!empty($_POST["password_o"]) && !empty($_POST["username_o"])) {
			$username = mysqli_real_escape_string($connection, $_POST["username_o"]);
			$password = mysqli_real_escape_string($connection, $_POST["password_o"]);
			
			$query = "select * from users where username= '" . $username . "' LIMIT 1;";
			
			$result = mysqli_query($connection, $query);
			
			if ($row = mysqli_fetch_assoc($result)){

				if ($row["password"]== hashword($password, $salt)){

					$_SESSION["message"]="Login successful";
					$_SESSION["username"]=$_POST["username_o"];

					mysqli_free_result($result);
					redirect("gamerules.php");
				}

				else echo "Login failed";
			}
		else echo "Login failed";
	}
	else echo "username/password cannot be blank;"
?>
