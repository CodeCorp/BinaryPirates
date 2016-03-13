<?php include_once("functions.php"); ?>
<?php require_once("sessions.php"); ?>
<?php include_once("header.php");?>


<p> Get to the database </p>

<?php 
	if(isset($_GET['submit'])){
		$id = $_GET['id'];
		$getid = "SELECT first_name, last_name FROM users WHERE user_id = '$id'";
		$result = mysql_query($getid);
		$num = @mysql_numrows($result);
		$i =0; 
		while ($i<$num){
			$first = mysql_result($result, $i, "first_name");
			$last = mysql_result($result, $i, "last_name");
			echo '<pre>';
			echo 'ID: ' . $id . '<br> First name:' . $first . '<br>Surname: ' . $last;
			echo '</pre>'
			$i++;
		}
	}




?>

<p> The doctor is blind this time :P </p>

<?php include_once("footer.php"); ?>