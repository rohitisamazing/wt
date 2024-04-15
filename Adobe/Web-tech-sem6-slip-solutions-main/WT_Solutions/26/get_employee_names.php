<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT eno, ename FROM EMP";
$result = $conn->query($sql);
$employees = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $employees[] = $row;
    }
}

$conn->close();
header('Content-Type: application/json');
echo json_encode($employees);
?>
