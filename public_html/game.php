<!-- Main landing page of the game -->


<?php include_once("functions.php"); ?>
<?php require_once("sessions.php"); ?>
<?php include_once("header.php");	?>
<center>Score: <?php display_score();?></center>

<div class="news"> Scarecrow, Joker and Bane have united and are creating an alliance against you. Their plan is to take over Superman. You need to save Metropolis along with Gotham. 
	Gotham needs you. Get ready! </div>

<div id="enclosure">	
	<div id="rounds">


	<table>

	<form action="game.php" method="GET">
	<tr><td colspan=2><a href="Round1.php" target="_blank" class="game_t" onmouseover=story(a1)>Save the gun</a></td></tr>
	<tr><td>	Flag: </td><td><input type = "text" value="" name="flag_1"/></td><td><input type = "submit" value="submit" name="submit1" class="game"/></td> </tr>
	<tr><td colspan=2><a href="Round2.php" target="_blank" class="game_t" onmouseover=story(b1)>Sometimes foce does it better</a></td></tr>
	<tr><td>	Flag: </td><td><input type = "text" value="" name="flag_2"/></td><td><input type = "submit" value="submit" name="submit2" class="game"/></td> </tr>
	<tr><td colspan=2><a href="Round3.php" target="_blank" class="game_t" onmouseover=story(c1)>Catch him... he is evading</a></td></tr>	
	<tr><td>	Flag: </td><td><input type = "text" value="" name="flag_3"/></td><td><input type = "submit" value="submit" name="submit3" class="game"/></td> </tr>
	<tr><td colspan=2><a href="Round4.php" target="_blank" class="game_t" onmouseover=story(d1)>It's a trap</a></td></tr>
	<tr><td>	Flag: </td><td><input type = "text" value="" name="flag_4"/></td><td><input type = "submit" value="submit" name="submit4" class="game"/></td> </tr>
	<tr><td colspan=2><a href="Round5.php" target="_blank" class="game_t" onmouseover=story(e1)>Decipher Joker's cipher</a></td></tr>
	<tr><td>	Flag: </td><td><input type = "text" value="" name="flag_5"/></td><td><input type = "submit" value="submit" name="submit5" class="game"/></td> </tr>
	<tr><td colspan=2><a href="hr.wav" target="_blank" class="game_t" onmouseover=story(f1)>Joker bids adieu</a></td></tr>
	<tr><td>	Flag: </td><td><input type = "text" value="" name="flag_6"/></td><td><input type = "submit" value="submit" name="submit6" class="game"/></td> </tr>
	<tr><td colspan=2><a href="Round8.php" target="_blank" class="game_t" onmouseover=story(g1)>Intercepting messages</a></td></tr>
	<tr><td>	Flag: </td><td><input type = "text" value="" name="flag_7"/></td><td><input type = "submit" value="submit" name="submit7" class="game"/></td> </tr>
	<tr><td colspan=2><a href="Round7.php" target="_blank" class="game_t" onmouseover=story(h1)>Reverse engineering</a></td></tr>
	<tr><td>	Flag: </td><td><input type = "text" value="" name="flag_8"/></td><td><input type = "submit" value="submit" name="submit8" class="game"/></td> </tr>
	</form>
	</table>
	
	</div>

	<div id="story"></div>
</div>






<?php
if (isset($_GET["submit1"])){
	if (isset($_GET["flag_1"]))	{
		 if($_GET["flag_1"]=="Be fast Batsy!"){
		 	echo "<script>story(a2);a1=a1+a2;</script>";
		 	update_score("R1", 50);
		 }
		 else
		 	echo "<script>story(a3);</script>";
	}
}
?>


<?php
if (isset($_GET["submit2"])){
	if (isset($_GET["flag_2"]))	{
		 if($_GET["flag_2"]=="Force did work"){
		 	echo "<script>story(b2);b1=b1+b2;</script>";
		 	update_score("R2", 50);
		 }
		 else
		 	echo "<script>story(b3);</script>";
	}
}
?>
	
<?php
if (isset($_GET["submit3"])){
	if (isset($_GET["flag_3"]))	{
		 if($_GET["flag_3"]=="A550"){
			update_score("R3", 50);
			echo "<script>story(c2);c1=c1+c2;</script>";
		 }
		 else
		 	echo "<script>story(c3);</script>";
	}
}
?>



<?php
if (isset($_GET["submit4"])){
	if (isset($_GET["flag_4"]))	{
		 if($_GET["flag_4"]=="LexLuthar Lab, 1630 : Fear"){
		 	echo "<script>story(d2);d1=d1+d2;</script>";
		 	update_score("R4", 200);
		 }
		 else
		 	echo "<script>story(d3);</script>";;
	}
}
?>


<?php
if (isset($_GET["submit5"])){
	if (isset($_GET["flag_5"]))	{
		 if($_GET["flag_5"]=="END OF KRYPTONIAN'S LOVE"){
		 	echo "<script>story(e2);e1=e1+e2;</script>";
		 	update_score("R5", 50);
		 }
		 else
		 	echo "<script>story(e3);</script>";
	}
}
?>

<?php
if (isset($_GET["submit6"])){
	if (isset($_GET["flag_6"]))	{
		 if($_GET["flag_6"]=="I think you and I are destined to do this forever"){
		 	echo "<script>story(f2);f1=f1+f2;</script>";
		 	update_score("R6", 50);
		 }
		 else
		 	echo "<script>story(f3);</script>";
	}
}
?>

<?php
if (isset($_GET["submit7"])){
	if (isset($_GET["flag_7"]))	{
		 if($_GET["flag_7"]=="16th January 2014, at Arkham"){
		 	echo "<script>story(g2);g1=g1+g2;</script>";
		 	update_score("R7", 50);
		 }
		 else
		 	echo "<script>story(g3);</script>";
	}
}
?>

<?php
if (isset($_GET["submit8"])){
	if (isset($_GET["flag_8"]))	{
		 if($_GET["flag_8"]=="BATMANvsSUPERMAN"){
		 	echo "<script>story(h2);h1=h1+h2;</script>";
		 	update_score("R8", 200);
		 }
		 else
		 	echo "<script>story(h3);</script>";
	}
}
?>



<?php include_once("footer.php"); ?>
