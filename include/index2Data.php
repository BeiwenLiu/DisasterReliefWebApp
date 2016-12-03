<?php


function insert($name,$street,$city,$state,$phonenumber,$email) {
    require('db.php');
    $conn = new mysqli($servername, $username, $password, $dbname);
    if (!$conn) {
        die('Could not connect: ' . mysql_error());
    }
    $result1 = $conn->query("INSERT INTO `requester`(`Name`, `PhoneNumber`, `Email`, `Street`, `City`, `State` ) VALUES ('$name','$street','$city','$state','$phonenumber','$email')");
    $conn->close();
}   
?>