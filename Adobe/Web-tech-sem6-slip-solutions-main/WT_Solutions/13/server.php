<?php
// Check if the name parameter is set in the POST request
if (isset($_POST['name'])) {
    // Get the name entered by the user
    $name = $_POST['name'];
    
    // Check if the name is empty
    if (empty($name)) {
        echo 'Stranger, please tell me your name!';
    }
    // Check if the name is one of the master names
    else if ($name === 'Rohit' || $name === 'Virat' || $name === 'Dhoni' || $name === 'Ashwin' || $name === 'Harbhajan') {
        echo 'Hello, master!';
    }
    // Otherwise, the server doesn’t know the user
    else {
        echo $name . ', I don\'t know you!';
    }
} else {
    // Handle case where name parameter is not set
    echo 'Name parameter is not set!';
}
?>
