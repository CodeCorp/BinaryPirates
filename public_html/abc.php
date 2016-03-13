<?php 
if (session_status() == PHP_SESSION_NONE) {
    ini_set('session.gc_maxlifetime', 3600*24*10);
    session_start();
}

if (!isset($_SESSION["username"]))
	redirect("Round8.php");
		
	include_once("header.php");	
	?>
	
	<p><font face="verdana"> The flag is: 16th January 2014, at Arkham</font></p>
	
