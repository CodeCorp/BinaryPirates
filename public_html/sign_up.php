<?php require_once("functions.php"); ?>

<?php

if (isset($_POST["submit"])){ 
	if (!empty($_POST["password"]) && !empty($_POST["username"])) {

		$password1 = mysqli_real_escape_string($connection, $_POST["password"]);
		$password2 = mysqli_real_escape_string($connection, $_POST["password_2"]);
		$username  = mysqli_real_escape_string($connection, $_POST["username"]);
		$email_id  = mysqli_real_escape_string($connection, $_POST["email_id"]);
		$phone_no  = mysqli_real_escape_string($connection, $_POST["phone_no"]);
		$first_name= mysqli_real_escape_string($connection, $_POST["first_name"]);
		$last_name = mysqli_real_escape_string($connection, $_POST["last_name"]);

		
		$q="SELECT * FROM users WHERE username='".$username."';";
		mysqli_query($connection, $q);
 		if(mysqli_affected_rows($connection)>=1){
    			echo "Username already exists";
   				}
 		else{
				if ($password1 == $password2){
					$query = "insert into users(username, password, first_name, last_name, email_id, phone_no) values ('" . $username;
					$query = $query . "', '". hashword($password1, $salt) ;
					$query = $query	. "', '" . $first_name . "', '" . $last_name;
					$query = $query ."', '" . $email_id . "', '" . $phone_no ."');";
		//			echo $query;
					
					mysqli_query($connection, $query);
					if (mysqli_affected_rows($connection))
						{
							$_SESSION["message"]="Username added to the database successfully";
							$_SESSION["username"]=$username;
							redirect ("gamerules.php");

						}
					else echo "Could not connect to the database";
				}
				else echo "Passwords do not match";
				}
			}
	else echo "Username/Password cannot be blank";
}
	?>
