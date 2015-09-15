<?php

$validated = false;

//Use $_COOKIE to get the cookie data – same usage as $_POST

if(isset($_COOKIE["username"])&&isset($_COOKIE["pas
sword"])) {

$user = $_COOKIE["username"];

$pass = $_COOKIE["password"];

//Begin validation code

if($user=="User1"&&$pass==MD5("password1")) $validated
= true;

if($user=="User2"&&$pass==MD5("password2")) $validated
= true;

//End validation code

}

if($validated) {

print "<a href=order.htm>"
//Ok; don’t need to do anything

} else {

//Make user go to login page

header("Location: login.php");

exit;

}

?>