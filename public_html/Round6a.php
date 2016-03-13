<?php include_once("functions.php"); ?>
<?php require_once("sessions.php"); ?>
<?php include_once("header.php");?>

<?php
if (isset($_GET["submit"])){
	if (isset($_GET["username_6"]) && isset($_GET["password_6"])){
		 if($_GET["username_6"]=="Darth" && $_GET["password_6"]=="Vader"){
		 	redirect("interim.php");
		 }
		 else
		 	echo "Username/Password do not match";
	}
	else 
		echo "Username/Password cannot be blank";
}
?>

	<form action="Round6a.php" method="GET">
		Username: <input type = "text" value="" name="username_6"/><br/>
		Password: <input type = "password" value="" name="password_6"/><br/>
	<input type = "submit" value="submit" name="submit"/><br/>
	</form>

	<p> I'll help you here <br/>
		Username: Darth<br/>
		Password: Vader<br/>
	</p>




<?php include_once("footer.php"); ?>