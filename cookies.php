<?php
if((isset($_POST["remember_me"]))&&($_POST["remember_me"]==1))
{
setcookie('email', $username, time()+3600);
setcookie('pass', $pass, time()+3600);
}
//for unseetting the cookies in php
 session_start();
unset("email", '', 1, "");
unset("pass", '', 1, "");
$_SESSION["login"] = "";
header("location: aforum/enter_furom.php");
?>