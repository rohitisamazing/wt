<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$eno = $_GET['eno'];

$sql = "SELECT * FROM EMP WHERE eno = $eno";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $employee = $result->fetch_assoc();
}

$conn->close();
header('Content-Type: application/json');
echo json_encode($employee);
?>
