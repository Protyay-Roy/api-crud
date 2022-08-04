<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Method: POST");
header("Access-Control-Allow-Header: Access-Control-Allow-Header, Content-Type, Access-Control-Allow-Method, Authorization, X-Requested-With");

include("config.php");

$data = json_decode(file_get_contents("php://input"), true);

$name = $data["sname"];
$age = $data["sage"];
$city = $data["scity"];

$sql = "INSERT INTO `crud` (`student_name`,`age`,`city`) VALUES ('{$name}',{$age},'{$city}')";

if(mysqli_query($con,$sql)){

    echo json_encode(array("massage" => "Record Insert Successful", "status" => true));

}else{

    echo json_encode(array("massage" => "Record Insert Not Successful", "status" => false));

}