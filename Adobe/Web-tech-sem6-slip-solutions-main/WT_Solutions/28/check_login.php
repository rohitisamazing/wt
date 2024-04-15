<?php
// Connect to the database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve username and password from POST request
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to check if username and password are valid
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Username and password are valid
    echo "Login successful!";
} else {
    // Username and password are invalid
    echo "Invalid username or password!";
}

// Close the database connection
$conn->close();
?>
