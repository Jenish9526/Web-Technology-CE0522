<?php
session_start();

// Protect the page: only logged in users can see it
if (!isset($_SESSION['username'])) {
   header("Location: login.php");
   exit();
}

// Count page visits using a cookie
if (isset($_COOKIE['visit_count'])) {
   $visits = $_COOKIE['visit_count'] + 1;
} else {
   $visits = 1;
}
setcookie("visit_count", $visits, time() + (30 * 24 * 60 * 60), "/");
?>
<!DOCTYPE html>
<html>
<head>
   <title>Welcome</title>
</head>
<body>
   <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
   <p>Session ID: <?php echo session_id(); ?></p>
   <p>Logged in at: <?php echo $_SESSION['login_time']; ?></p>
   <p>You have visited this page <?php echo $visits; ?> time(s) (stored in a cookie).</p>
   <p>Remembered user cookie:
      <?php echo isset($_COOKIE['remember_user']) ? $_COOKIE['remember_user'] : "Not
set"; ?>
   </p>
   <a href="logout.php">Logout</a>
</body>
</html>
