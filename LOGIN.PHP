<?php

if(isset($_POST["username"])&&isset($_POST["passwor
d"])) {

$user = $_POST["username"];

$pass = $_POST["password"];

$validated = false;

//Begin validation code

if($user=="User1"&&$pass=="password1") $validated = true;

if($user=="User2"&&$pass=="password2") $validated = true;

//End validation code

//Begin login code

if($validated) {

setcookie("username", $user); //Sets a cookie storing the username

setcookie("password", MD5($pass)); //Sets a cookie storing the encrypted value of the password

echo "Logged in as $user.";

} else {

echo "Invalid username/password combination.";

}

//End login code

}

?>

<form action=login.php method=post>

Username: <input type="text" name="username"><br>

Password: <input type="password" name="password"><br>

<input type="submit" value="Login">

</form>