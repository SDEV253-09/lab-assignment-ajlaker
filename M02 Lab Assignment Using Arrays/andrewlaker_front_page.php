<?php

/*
*  Author: Andrew Laker
*  Class: SDEV 253
*  Date: 4/1/2020
*  M02 Lab Assignment - Using Arrays
*/

$pictures = array('corgi1.jpg', 'corgi2.jpg','corgi3.jpg');
shuffle($pictures);
?>
<!DOCTYPE html>
<html>
<head>
<title>Andrew's Favorite Corgis</title>
    <style>
        img {
            width: 550px;
        }
    </style>
</head>
<body>
<h1>Andrew's Favorite Corgis</h1>
<div align="center">
<table style="width: 100%; border: 0">
<tr>
<?php
for ($i = 0; $i < 3; $i++) {
echo "<td style=\"width: 33%; text-align:
center\">
<img src=\"";
echo $pictures[$i];
echo "\"/></td>";
}
?>
</tr>
</table>
</div>
</body>
</html>