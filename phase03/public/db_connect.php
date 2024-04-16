<?php
// This guide demonstratesthe five fundamental steps
// of database interaction using PHP.
// Credentials
$dbhost = 'localhost';
$dbuser = 'sally';
$dbpass = 'somePa55word';
$dbname = 'salamanders';
$connection =mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
mysqli_close($connection);