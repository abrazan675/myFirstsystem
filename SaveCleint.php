<?php
include('connfile.php');

// echo $_POST;
print_r($_POST);


$clientname = $_POST['cname']; 
$clientid = $_POST['cid']; 
$clientage = $_POST['cage'];  
$clientgender = $_POST['cgender'];  

//we added the price 
$sqlprice = "INSERT INTO `clients`( `age`, `gender`, `name`, `Nat-ID`) VALUES ('$clientage','$clientgender','$clientname','$clientid')";
$conn->query($sqlprice);


header('Location: FormClient.php');



