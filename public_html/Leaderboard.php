<?php include_once("functions.php"); ?>
<?php require_once("sessions.php"); ?>
<?php include_once("header.php");	?>

<center>
<?php
$query = "select username, score from users order by 'score' desc;";
$result = mysqli_query($connection, $query);?>
 <table id="leaderboard">
 <tr><td>Rank</td><td>Username</td><td>Score</td></tr>
<?php
$i=1;
while($row = mysqli_fetch_assoc($result)){
	echo "<tr><td>".$i."</td><td>".$row['username']."</td><td>".$row['score']."</tr>";
	$i++;
}
mysqli_free_result($result);?>
</table>
</center>
<?php include_once("footer.php"); ?>
