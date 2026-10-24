<?php
require 'db.php';

$message = "";

// Insert a new employee record
if (isset($_POST['save'])) {
   $name = $_POST['emp_name'];
   $email = $_POST['email'];
   $dept = $_POST['department'];
   $desig = $_POST['designation'];
   $sal = $_POST['salary'];
   $date = $_POST['joining_date'];

  $stmt = mysqli_prepare($conn, "INSERT INTO employees (emp_name, email, department,
designation, salary, joining_date) VALUES (?, ?, ?, ?, ?, ?)");
  mysqli_stmt_bind_param($stmt, "ssssds", $name, $email, $dept, $desig, $sal, $date);

    if (mysqli_stmt_execute($stmt)) {
       $message = "Employee record saved successfully!";
    } else {
       $message = "Error: " . mysqli_error($conn);
    }
    mysqli_stmt_close($stmt);
}

// Delete an employee record
if (isset($_GET['delete'])) {
   $id = (int)$_GET['delete'];
   mysqli_query($conn, "DELETE FROM employees WHERE emp_id = $id");
   header("Location: employee.php");
   exit();
}

$result = mysqli_query($conn, "SELECT * FROM employees ORDER BY emp_id DESC");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Employee Records</title>
  <style>
     body { font-family: Arial; margin: 30px; }
     input, select { padding: 6px; margin: 4px 0; width: 250px; }
     table { border-collapse: collapse; width: 100%; margin-top: 20px; }
     th, td { border: 1px solid #333; padding: 8px; text-align: left; }
     th { background-color: #2c3e50; color: white; }
     .msg { color: green; font-weight: bold; }
  </style>
</head>
<body>
  <h2>Employee Management</h2>
  <?php if ($message != "") { echo "<p class='msg'>$message</p>"; } ?>

  <form method="post" action="employee.php">
    Name:<br><input type="text" name="emp_name" required><br>
    Email:<br><input type="email" name="email" required><br>
    Department:<br>
    <select name="department">
       <option>IT</option>
       <option>HR</option>
       <option>Finance</option>
       <option>Marketing</option>
    </select><br>
    Designation:<br><input type="text" name="designation" required><br>
    Salary:<br><input type="number" step="0.01" name="salary" required><br>
    Joining Date:<br><input type="date" name="joining_date" required><br><br>
    <input type="submit" name="save" value="Save Employee" style="width:150px;">
  </form>

  <h3>Employee List</h3>
  <table>
     <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Department</th>
        <th>Designation</th><th>Salary</th><th>Joining Date</th><th>Action</th>
     </tr>
     <?php while ($row = mysqli_fetch_assoc($result)) { ?>
     <tr>
        <td><?php echo $row['emp_id']; ?></td>
        <td><?php echo htmlspecialchars($row['emp_name']); ?></td>
        <td><?php echo htmlspecialchars($row['email']); ?></td>
        <td><?php echo htmlspecialchars($row['department']); ?></td>
        <td><?php echo htmlspecialchars($row['designation']); ?></td>
        <td><?php echo $row['salary']; ?></td>
        <td><?php echo $row['joining_date']; ?></td>
        <td><a href="employee.php?delete=<?php echo $row['emp_id']; ?>" onclick="return
confirm('Delete this record?');">Delete</a></td>
     </tr>
     <?php } ?>
  </table>
</body>
</html>
