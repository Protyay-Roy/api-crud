<?php

header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');

include("config.php");

$sql = "SELECT * from `crud` ";

$query = mysqli_query($con, $sql) or die("QUERY Failed");

if (mysqli_num_rows($query) > 0) {
    
    $jsonData = mysqli_fetch_all($query, MYSQLI_ASSOC);
    echo json_encode($jsonData);
} else {

    echo json_encode(array("massage" => "No Records Found. ", "status" => false));
}
