<?php
// Retrieve the cookie values
$fontstyle = isset($_COOKIE['fontstyle']) ? $_COOKIE['fontstyle'] : 'Arial';
$fontsize = isset($_COOKIE['fontsize']) ? $_COOKIE['fontsize'] : '12';
$fontcolor = isset($_COOKIE['fontcolor']) ? $_COOKIE['fontcolor'] : '#000000';
$bgcolor = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : '#FFFFFF';
?>
<!DOCTYPE html>
<html>
<head>
<title>Page with new setings</title>
<style type=”text/css”>
body {
Font-family: <?php echo $fontstyle ?>;
Font-size: <?php echo $fontsize ?>px;
Color: <?php echo $fontcolor ?>;
Background-color: <?php echo $bgcolor ?>;
}
</style>
</head>
<body>
<h1>Page with new setings</h1>
<p>This is the page with the new setings. The font style is <?php echo $fontstyle ?>, the font
size is <?php echo $fontsize ?>px, the font color is <?php echo $fontcolor ?>, and the background color
is <?php echo $bgcolor ?>.</p>
</body>
</html>
