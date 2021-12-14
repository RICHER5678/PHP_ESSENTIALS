
<?php
// Starting the session using session_start() function
session_start();
?>
<?php
// Now Storing the session's data (little data only)
$_SESSION["firstname"] = "Captain Kumar";
$_SESSION["lastname"] = "Sake King";
$_SESSION["ID"] = "1473";
$_SESSION["favcolor"] = "Blue";
$_SESSION["favanimal"] = "OX";
$_SESSION["fav place"] = "Himalayas";
$_SESSION["fav hide out"] = "Anantapur";
?>
<html>
<body>
<?php
// Now Echo’s session variables that were now set on this same page but at different php code.
echo "His First Name is ". $_SESSION["firstname"] . ".<br>";
echo "His Last Name is ". $_SESSION["lastname"] . ".<br>";
echo "His ID Name is ". $_SESSION["ID"] . ".<br>";
echo "Favourite color name is " . $_SESSION["favcolor"] . ".<br>";
echo "Favourite animal name is " . $_SESSION["favanimal"] . ".";
echo "His favourite place name is is ". $_SESSION["fav place"] . ".<br>";
echo "His favourite hide out place Name is ". $_SESSION["fav hide out"] . ".";
?>
</body>
</html></ code>
<!--destroying a session-->

<?php
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
?>