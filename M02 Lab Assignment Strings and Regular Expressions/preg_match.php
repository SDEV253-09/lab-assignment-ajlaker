<?php
/*
* Author: Andrew Laker
* Class: SDEV 253
* Assignment: M02 Lab Assignment - Strings and Regular Expressions
* Date: April 3, 2020
*/

// BELOW IS THE SAMPLE CODE
//$userinfo = "Name: <b>Zeev Suraski</b> <br> Title: <b>PHP Guru</b>";
//preg_match_all("/<b>(.*)<\/b>/U", $userinfo, $pat_array);
//printf("%s <br /> %s", $pat_array[0][0], $pat_array[0][1]);

// TRY TO EXTRACT THE DOMAIN FROM THE URL http://www.sdev253.net/home.html
$url = "http://www.sdev253.net/home.html";
preg_match("@^(?:http://)?([^/]+)@i", $url, $my1Matches);
$first = $my1Matches[1];
preg_match('/[^.]+\\.[^.]+$/', $first, $my2Matches);
echo "domain name is: " . $my2Matches[0];
?>