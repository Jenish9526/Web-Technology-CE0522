<!DOCTYPE html>
<html>
<head>
  <title>Include, Require and Date Functions</title>
</head>
<body>
  <?php
  // include: shows a warning and continues if the file is missing
  include 'header.php';

  // require: stops the script with a fatal error if the file is missing
  require 'config.php';

  // include_once / require_once: includes the file only one time
  include_once 'header.php';
  require_once 'config.php';

  echo "<h3>Site Name: $siteName</h3>";
  echo "<p>Created by: $author</p>";

  // Set the time zone first so every date/time below uses it
  date_default_timezone_set("Asia/Kolkata");

  // Date and time functions
  echo "<h3>Date Functions</h3>";
  echo "Time Zone: " . date_default_timezone_get() . "<br>";
  echo "Today's Date: " . date("d-m-Y") . "<br>";
  echo "Full Date: " . date("l, d F Y") . "<br>";
  echo "Current Time: " . date("h:i:s A") . "<br>";
  echo "Day of the Year: " . date("z") . "<br>";
  echo "Week Number: " . date("W") . "<br>";

  echo "Timestamp (time()): " . time() . "<br>";
  echo "Date from timestamp (mktime): " . date("d-m-Y", mktime(0, 0, 0, 12, 25, 2025)) . "<br>";
  echo "Date from string (strtotime): " . date("d-m-Y", strtotime("+7 days")) . "<br>";
  echo "Date is valid (checkdate 29-02-2024): " . (checkdate(2, 29, 2024) ? "Yes" : "No") . "<br>";

  // Difference between two dates
  $date1 = date_create("2025-01-01");
  $date2 = date_create(date("Y-m-d"));
  $diff = date_diff($date1, $date2);
  echo "Days passed since 01-01-2025: " . $diff->days . " days<br>";

  include 'footer.php';
  ?>
</body>
</html>
