<?php
If(isset($_POST['submit'])) {
$fontstyle = $_POST['fontstyle'];
$fontsize = $_POST['fontsize'];
$fontcolor = $_POST['fontcolor'];
$bgcolor = $_POST['bgcolor'];
// Set the cookie values
Setcookie('fontstyle', $fontstyle, time()+86400);
Setcookie('fontsize', $fontsize, time()+86400);
Setcookie('fontcolor', $fontcolor, time()+86400);
Setcookie('bgcolor', $bgcolor, time()+86400);
// Redirect to the next page
Header('Location: Thirdpage.php');
Exit();
}
?>