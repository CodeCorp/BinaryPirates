<?php include_once("header.php");?>

<p><I> Bruce (Brute) force it master</I></p>
 
<form action="Round2.php" method="POST">
	Username : <input type = "text" value="" name="username_round2"></br>
	Password : <input type = "password" value="" name="password_round2"></br>
	<input type="submit" value="Test your luck" name="submit"></br>
</form>

<?php
if (isset($_POST["submit"])){
	if (!empty($_POST["password_round2"]) && !empty($_POST["username_round2"])) 	{
		 if($_POST["username_round2"]=="admin" && $_POST["password_round2"]=="Qwerty"){
		 	echo "Flag : Force did work";
		 }
		 else
		 	echo "Username/Password invalid";
	}
}
?>




<?php include_once("footer.php"); ?>
