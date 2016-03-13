<?php include_once("header.php");?>

	
<?php 	
if(!isset($_COOKIE["BatMobile"])){setcookie("BatMobile", "Locked", time() + (86400 * 30));}
	if ($_COOKIE["BatMobile"]=="Locked"){
		echo "<I>Master, you do not have the key to unlock the BatMobile. Who are you?</I>";
	}
	else if ($_COOKIE["BatMobile"]=="Unlocked"){
		echo "<I>You may go master</I><br/><br/>"; 
		echo "Flag: Afivefive0";
	}
	else
		echo "<I>Shoo Shoo!</I>";	

?>

<?php include_once("footer.php"); ?>
