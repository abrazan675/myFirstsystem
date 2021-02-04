<?php

//this is a code from the internet 
//$servername = "localhost"; //127.0.0.1
$servername = "127.0.0.1"; //
$username = "root";
$password = "123456";
$dbname = "hotal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection