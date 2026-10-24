<?php
session_start();

// If the user is already logged in, go to the welcome page
if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit();
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = trim($_POST['username']);
   $password = $_POST['password'];

    // Demo credentials
    if ($username == "admin" && $password == "admin123") {
       $_SESSION['username'] = $username;
       $_SESSION['login_time'] = date("d-m-Y h:i:s A");

      // Remember the username in a cookie for 7 days
      if (isset($_POST['remember'])) {
         setcookie("remember_user", $username, time() + (7 * 24 * 60 * 60), "/");
      } else {
         setcookie("remember_user", "", time() - 3600, "/");
      }

       header("Location: welcome.php");
       exit();
    } else {
       $error = "Invalid username or password!";
    }
}

$savedUser = isset($_COOKIE['remember_user']) ? $_COOKIE['remember_user'] : "";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login - Session and Cookie</title>
</head>
<body>
  <h2>Login Page</h2>
  <?php if ($error != "") { echo "<p style='color:red;'>$error</p>"; } ?>
  <form method="post" action="login.php">
     Username: <input type="text" name="username" value="<?php echo
htmlspecialchars($savedUser); ?>" required><br><br>
     Password: <input type="password" name="password" required><br><br>
     <input type="checkbox" name="remember" <?php if ($savedUser != "") echo "checked";
?>> Remember me<br><br>
     <input type="submit" value="Login">
  </form>
  <p>Demo login: admin / admin123</p>
</body>
</html>
