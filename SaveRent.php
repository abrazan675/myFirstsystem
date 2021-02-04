<?php
include('connfile.php');

// echo $_POST;
print_r($_POST);

    $clientname = $_POST['clientname']; 
    $roomname = $_POST['roomname']; 
    $rentprice = $_POST['rentprice'];
    $rentdate = $_POST['rentdate'];
   

//we added the price 
$sqlprice = " INSERT INTO `rents`( `clientname`, `roomname`, `rentprice`, `rentdate`) VALUES ('$clientname','$roomname','$rentprice','$rentdate')";
$conn->query($sqlprice);


header('Location: FormRent.php');



