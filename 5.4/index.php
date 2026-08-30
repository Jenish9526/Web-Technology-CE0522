<?php
$title = "Understanding phpMyAdmin";
$features = [
    "Create, alter and drop databases",
    "Create, edit and drop tables",
    "Insert, update and delete records",
    "Run custom SQL queries",
    "Import and export databases (SQL, CSV, etc.)",
    "Manage user accounts and privileges"
];
$steps = [
    "Install XAMPP / WAMP on the system",
    "Start the Apache and MySQL services",
    "Open a web browser",
    "Go to http://localhost/phpmyadmin",
    "The phpMyAdmin dashboard opens up"
];
$sections = [
    "Databases" => "Lists and manages all available databases.",
    "SQL" => "Lets you run SQL queries directly.",
    "Import" => "Imports data from a file into a database.",
    "Export" => "Exports a database or table to a file.",
    "Users" => "Creates and manages MySQL user accounts."
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Understanding phpMyAdmin</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #eef1f6;
        }

        header {
            background-color: #1a73e8;
            color: white;
            text-align: center;
            padding: 22px;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        header p {
            margin: 4px 0 0;
            font-size: 14px;
        }

        .container {
            width: 82%;
            margin: 25px auto;
        }

        .box {
            background-color: white;
            padding: 18px 20px;
            margin-bottom: 18px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #1a73e8;
            margin-top: 0;
            font-size: 18px;
        }

        li {
            margin: 8px 0;
        }

        .note {
            background-color: #e8f0fe;
            border-left: 5px solid #1a73e8;
            padding: 12px 15px;
            margin-top: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 8px;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f1f5fb;
        }

        footer {
            background-color: #202124;
            color: white;
            text-align: center;
            padding: 12px;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $title; ?></h1>
        <p>Web Technology Practical</p>
    </header>
    <div class="container">
        <!-- What is phpMyAdmin -->
        <div class="box">
            <h2>What is phpMyAdmin?</h2>
            <p>
                phpMyAdmin is a free, open-source, web-based tool used to
                administer MySQL and MariaDB databases through a browser
                instead of the command line.
            </p>
            <div class="note">
                <b>Note:</b>
                This program only displays information about phpMyAdmin;
                it does not connect to or modify any actual database.
            </div>
        </div>
        <!-- Features -->
        <div class="box">
            <h2>Features of phpMyAdmin</h2>
            <ul>
                <?php
                foreach ($features as $f) {
                    echo "<li>$f</li>";
                }
                ?>
            </ul>
        </div>
        <!-- Steps -->
        <div class="box">
            <h2>Steps to Open phpMyAdmin</h2>
            <ol>
                <?php
                foreach ($steps as $s) {
                    echo "<li>$s</li>";
                }
                ?>
            </ol>
        </div>
        <!-- Main Sections -->
        <div class="box">
            <h2>Main Sections</h2>
            <table>
                <tr>
                    <th>Section</th>
                    <th>Purpose</th>
                </tr>
                <?php
                foreach ($sections as $name => $desc) {
                    echo "
                    <tr>
                        <td><b>$name</b></td>
                        <td>$desc</td>
                    </tr>
                    ";
                }
                ?>
            </table>
        </div>
        <!-- Conclusion -->
        <div class="box">
            <h2>Conclusion</h2>
            <p>
                phpMyAdmin provides a simple graphical interface for managing
                MySQL and MariaDB databases, making database administration
                much easier for developers and students.
            </p>
        </div>
    </div>
    <footer>
        <p>
            Web Technology Practical &copy;
            <?php echo date("Y"); ?>
        </p>
    </footer>
</body>
</html>