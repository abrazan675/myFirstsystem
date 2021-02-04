<?php
include('connfile.php');

// echo $_POST;
print_r($_POST);
 
$roomname = $_POST['Rname']; 
$roomtype = $_POST['Rtype']; 
$roomstat =  $_POST['Rstat']; 

//we added the price 
$sqlprice = "INSERT INTO `rooms`( `name`, `type`, `stat`) VALUES ('$roomname','$roomtype','$roomstat')";
$conn->query($sqlprice);


header('Location: FormRoom.php');



