<?php
session_start();

// Remove all session variables and destroy the session
$_SESSION = array();
session_destroy();

header("Location: login.php");
exit();
?>
