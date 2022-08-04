<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

include("config.php");

$search_value = isset($_GET['search']) ? $_GET['search'] : die();

$sql = "SELECT * FROM `crud` WHERE `student_name` LIKE '%{$search_value}%' ";


$query = mysqli_query($con, $sql) or die("QUERY Failed");

if (mysqli_num_rows($query) > 0) {

    $output = mysqli_fetch_all($query, MYSQLI_ASSOC);

    echo json_encode($output);
    
} else {

    echo json_encode(array("massage" => "No Records Found. ", "status" => false));
}
