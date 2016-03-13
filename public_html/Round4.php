<?php include_once("header.php");?>

<?php
$dbh1 = mysql_connect('localhost', 'doctor', 'needhelp', true); 
mysql_select_db('hack', $dbh1);
?>

<h3>
	CIA Ofiicial Records</h3>

	<p><I> Get to the database </I></p>

<form action="Round4.php" method=GET>
	Enter id: <input type = "text" value="" name="id"/><br/>
	<input type = "submit" value="submit" name="submit1"/><br/>


<?php 
	if(isset($_GET['submit1'])){
		$id = $_GET['id'];
		$getid = "SELECT first_name, last_name FROM CIA_Official_Records WHERE id = '$id'";
		$result = mysql_query($getid, $dbh1) or die('<pre>' . mysql_error(). '</pre>');
		$num = mysql_numrows($result);
		$i =0; 
		while ($i<$num){
			$first = mysql_result($result, $i, "first_name");
			$last = mysql_result($result, $i, "last_name");
			echo '<pre>';
			echo 'ID: ' . $id . '<br>First name:' . $first . '<br>Surname: ' . $last;
			echo '</pre>';
			$i++;
		}
	}
?>


<?php include_once("footer.php"); ?>