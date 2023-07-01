<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$email = $_POST['email'];
$targetDir = "uploads/";
$healthReportName = $_FILES["healthReport"]["name"];
$healthReportPath = $targetDir . basename($healthReportName);
move_uploaded_file($_FILES["healthReport"]["tmp_name"], $healthReportPath);
