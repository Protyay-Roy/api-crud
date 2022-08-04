<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: * ");
header("Access-Control-Allow-Method: DELETE ");
header("Access-Control-Allow-Header: Access-Control-Allow-Header, Content-Type, Access-Control-Allow-Method, Authorization, X-Requested-With ");

include("config.php");

$data = json_decode(file_get_contents("php://input"),true);

$student_id = $data["sid"];

$sql = "DELETE FROM `crud` WHERE `id` = {$student_id}";

if(mysqli_query($con,$sql)){
    echo json_encode(array("massage" => "Student Record Deleted Successful", "status" => true));
}else{
    echo json_encode(array("massage" => "Student Record  Not Deleted", "status" => false));
}