<?php
// Connect to database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve selected teacher details
if (isset($_POST['tno'])) {
    $tno = $_POST['tno'];
    $sql = "SELECT * FROM TEACHER WHERE tno = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $tno);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "Teacher Name: " . $row['tname'] . "<br>";
        echo "Qualification: " . $row['qualification'] . "<br>";
        echo "Salary: " . $row['salary'] . "<br>";
    } else {
        echo "No data found.";
    }
}

// Close database connection
mysqli_close($conn);
?>
