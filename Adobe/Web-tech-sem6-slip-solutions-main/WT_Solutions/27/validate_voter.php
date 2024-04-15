<?php
$name = $_POST['name'];
$age = $_POST['age'];
$nationality = $_POST['nationality'];

// Validate name
if (ctype_upper($name)) {
    // Validate age
    if ($age >= 18) {
        // Validate nationality
        if (strtolower($nationality) === 'indian') {
            echo 'Voter details validated successfully.';
        } else {
            echo 'Nationality should be Indian.';
        }
    } else {
        echo 'Age should be at least 18 years.';
    }
} else {
    echo 'Name should be in uppercase letters only.';
}
?>
