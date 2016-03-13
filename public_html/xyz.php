<?php 
ini_set('session.gc_maxlifetime', 3600*24*10);
session_start();
if (!isset($_SESSION["username"]))
	redirect("Round8.php");

	include_once("header.php");	
	echo "We are sorry but we have been asked to stop normal users from accessing this portal. Only admins may go ahead.";
	?>