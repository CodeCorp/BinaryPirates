<?php

//Connecting to database

define("DB_HOST", 'localhost');
define("DB_USER", 'binary_pirates');
define("DB_PASS", 'Hallo123');
define("DB_NAME", 'binary_pirates');
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

function establishing_connection()
{
	if(mysqli_connect_errno())
	{
		die("Database connection failed: " . mysqli_connect_error() . "<br/");
	}
	else
		echo ("Database connection successful <br/>");

}
// -----------------------------------------------------------------------------------------------------------------

//Hashing and encryption

$key = md5('quark');
$salt = md5('quark');

//Encrypt
function encrypt($string, $key){
	$string = rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $string, MCRYPT_MODE_ECB)));
}

//Decrypt
function decrypt($string, $key){
	$string = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($string), MCRYPT_MODE_ECB));
}

function hashword($string, $salt){
	$string = crypt($string, '$1$' . $salt . '$');
}


//------------------------------------------------------------------------------------------------------------------

function redirect($link){
	header ("location: {$link}");
	exit;
}

function update_score($round, $score){
	global $connection;
	$username = mysqli_real_escape_string($connection, $_SESSION["username"]);
	
	//first see if the users has already solved that round or not
	
	$sql = "SELECT {$round} from users where username='{$username}'";		
	$result = mysqli_query($connection, $sql);
	if ($row = mysqli_fetch_assoc($result)){
		if($row["{$round}"]==0){
			//if the user has not solved the round			
			$sql = "UPDATE users SET {$round}=1, score=score+{$score} WHERE username='{$username}'";		
			mysqli_query($connection, $sql);
		}
	}
	mysqli_free_result($result);

}

function display_score(){
	global $connection;
	$username = mysqli_real_escape_string($connection, $_SESSION["username"]);
	$sql = "SELECT score from users where username='{$username}'";		
	$result = mysqli_query($connection, $sql);
	if ($row = mysqli_fetch_assoc($result)){
		echo $row["score"];
		mysqli_free_result($result);
	}
}

?>