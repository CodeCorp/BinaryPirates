<?php include_once("functions.php"); ?>
<?php require_once("sessions.php"); ?>
<?php include_once("header.php");?>


<p> DecRYPT this </p>
<p> QVA US HWRIEUVY;VL' JUXQ</p>


 
<form action="Round5.php" method="GET">
	Enter solution: <input type="text" value="" name="crypto">
	<input type="submit" name="submit" value="submit">
</form>

<?php
if (isset($_GET["submit"])){
	if (!empty($_GET["crypto"])) 	{
		 if($_GET["crypto"]=="END OF KRYPTONIAN'S LOVE") {
		 	echo "Flag : END OF KRYPTONIAN'S LOVE";
		 }
		 else
		 	echo "Haha! Be mature Batsy!";
	}
}


?>



<?php include_once("footer.php"); ?>
