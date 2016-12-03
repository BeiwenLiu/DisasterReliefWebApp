<?php

function select() {
   	require('db.php');
    $conn = new mysqli($servername, $username, $password, $dbname);
    if (!$conn) {
        die('Could not connect: ' . mysql_error());
    }
    $result1 = $conn->query("SELECT `Street`,`City`,`State` FROM `requester`");

    while ($row = mysqli_fetch_array($result1, MYSQLI_NUM)) {
    	$string = "";
        for ($i = 0; $i < sizeof($row); $i++) {
            $string = $string . " " . $row[$i];
        }
        $total[] = $string;
    }

    return $total;
    $result1->close();
    $conn->close();
}   
?>