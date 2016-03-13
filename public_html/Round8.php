<?php 
include_once("header.php");
include_once("functions.php");
$dbh2 = mysqli_connect('localhost','hijack','SaveMe123','hijack');

?>

<p>You intercepted this packet over the network. You think this can help you get admin privileges in the Justice League portal.</p>
<a href="Jokerisfunny.pcap">Click here to download</a>
<!--Sign up form-->

<h2> Sign Up </h2>
<form action = "Round8.php" method ="POST">
	Username: <input type = "text" value="" name="u1"/><br/>
	Password: <input type = "password" value="" name="p1"/><br/>
	Confirm Password: <input type = "password" value="" name="p12"/><br/>
	<input type = "submit" value="submit" name="submit1"/><br/>

	</form>

<?php

if (isset($_POST["submit1"])){ 
	if (!empty($_POST["p1"]) && !empty($_POST["u1"])) {

		$password1 = $_POST["p1"];
		$password2 = $_POST["p12"];
		$username  = $_POST["u1"];

		if ($password1 == $password2){
			$query = "insert into users(username, password) values ('" . $username . "', '". hashword($password1, $salt). "');" ;
			mysqli_query($dbh2, $query);
			if (mysqli_affected_rows($dbh2))
				{
					$_SESSION["username"]=$username;
					redirect("abc.php");

				}
			else echo "Could not connect to the database";
		}
		else echo "Passwords do not match";
		}
	else echo "Username/Password cannot be blank";}
	?>

<!-- End of Sign Up -->


<!--sign in form -->
<h2> Sign in </h2>
<form action = "Round8.php" method ="POST">
	Username: <input type = "text" value="" name="u2"/><br/>
	Password: <input type = "password" value="" name="p2"/><br/>
	<input type = "submit" value="submit" name="submit2"/><br/>


<?php
if (isset($_POST["submit2"]))	{
	if (!empty($_POST["p2"]) && !empty($_POST["u2"])) {
			$username = mysqli_real_escape_string($dbh2, $_POST["u2"]);
			$password = mysqli_real_escape_string($dbh2, $_POST["p2"]);
			
			$query = "select * from users where username= '" . $username . "' LIMIT 1;";
			
			$result = mysqli_query($dbh2, $query);
			
			if ($row = mysqli_fetch_assoc($result)){

				if ($row["password"]== hashword($password, $salt)){
					
					$_SESSION["username"]=$_POST["u2"];

					mysqli_free_result($result);
					
					if ($row["access"]=="admin"){
						redirect("abc.php");
					}
					else{redirect("xyz.php");}
				}

				else echo "Login failed";
			}
		else echo "Login failed";
	}
	else echo "username/password cannot be blank";
}
?>
<!-- end of sign in -->
