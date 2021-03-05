<?php

$servername = "mysql.comp.polyu.edu.hk";
$username = "18079999d";
$password = "qrvgkegu";
$db = "gujrat";

// Generate connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>