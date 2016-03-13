<?php 
session_start();
if (!isset($_SESSION["username"]))
	redirect("index.php");
?>