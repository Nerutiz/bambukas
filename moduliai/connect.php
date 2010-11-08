<?php
$dbhost = "localhost";
$dbname = "mansanas_email";
$dbuser = "mansanas_email";
$dbpass = "email";


mysql_connect ( $dbhost, $dbuser, $dbpass)or die("Could not connect: ".mysql_error());
mysql_select_db($dbname) or die(mysql_error());
?>