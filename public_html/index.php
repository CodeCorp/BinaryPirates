<?php require_once("functions.php");?>
<?php
session_start();

// php for sign up form
require_once("sign_up.php");

//php for sign in form
require_once("sign_in.php");
?>


<?php include_once("header.php"); ?>
<!-- <p>May the force be with you... Ha Ha Ha </p> -->

<!--Sign up form-->
<div class="form">
<table>
<tr><td><h2> Sign Up </h2></td></tr>
<form action = "index.php" method ="POST">
	<tr><td>Username </td><td> <input type = "text" value="" name="username"/></td></tr>
	<tr><td>First Name </td><td><input type = "text" value="" name="first_name"/></td></tr>
	<tr><td>Last Name </td><td><input type = "text" value="" name="last_name"/></td></tr>
	<tr><td>E-Mail ID </td><td><input type = "text" value="" name="email_id"/></td></tr>
	<tr><td>Mobile Number </td><td><input type = "text" value="" name="phone_no"/></td>
	<tr><td>Password </td><td><input type = "password" value="" name="password"/></td></tr>
	<tr><td>Confirm Password </td><td><input type = "password" value="" name="password_2"/></td></tr>
	<tr><td><input type = "submit" value="submit" name="submit"/></td></tr>
	</form>
</table>
</div>

<!--sign in form -->
<div class="form">
<table>
<tr><td><h2> Sign in </h2></td></tr>
<form action = "index.php" method ="POST">
	<tr><td>Username </td><td><input type = "text" value="" name="username_o"/></td></tr>
	<tr><td>Password </td><td><input type = "password" value="" name="password_o"/></td></tr>
	<tr><td><input type = "submit" value="submit" name="submit_o"/></td></tr>
	</form>
	</table>
	</div>
	</div>
	</body>
</html>