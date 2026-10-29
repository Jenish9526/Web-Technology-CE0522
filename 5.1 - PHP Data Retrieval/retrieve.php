<!DOCTYPE html>
<html>
<head>
  <title>Server Side Data Retrieval</title>
</head>
<body>
  <h2>Student Information Form</h2>
  <form method="post" action="retrieve.php">
     Name: <input type="text" name="name" required><br><br>
     Email: <input type="email" name="email" required><br><br>
     Course:
     <select name="course">
        <option value="B.Tech CSE">B.Tech CSE</option>
        <option value="B.Tech IT">B.Tech IT</option>
        <option value="BCA">BCA</option>
     </select><br><br>
     Gender:
     <input type="radio" name="gender" value="Male" checked> Male
     <input type="radio" name="gender" value="Female"> Female<br><br>
     <input type="submit" name="submit" value="Submit (POST)">
  </form>

  <h2>Search Using GET Method</h2>
  <form method="get" action="retrieve.php">
    Enter keyword: <input type="text" name="keyword">
    <input type="submit" value="Search (GET)">
  </form>
  <hr>

  <?php
  // Data retrieved from the POST request
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
     $name = htmlspecialchars($_POST['name']);
     $email = htmlspecialchars($_POST['email']);
     $course = htmlspecialchars($_POST['course']);
     $gender = htmlspecialchars($_POST['gender']);

      echo "<h3>Data received using POST method</h3>";
      echo "Name: $name <br>";
      echo "Email: $email <br>";
      echo "Course: $course <br>";
      echo "Gender: $gender <br>";
  }

  // Data retrieved from the GET request
  if (isset($_GET['keyword'])) {
     $keyword = htmlspecialchars($_GET['keyword']);
     echo "<h3>Data received using GET method</h3>";
     echo "Keyword searched: $keyword <br>";
  }

  // Server information
  echo "<h3>Server Information</h3>";
  echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
  echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
  echo "Script Name: " . $_SERVER['PHP_SELF'] . "<br>";
  ?>
</body>
</html>
