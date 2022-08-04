<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: * ");

include("config.php");

$data = json_decode(file_get_contents("php://input"),true);

$student_id = $data["sid"];

$sql = "SELECT * from `crud` WHERE `id` = {$student_id} ";

if($query = mysqli_query($con,$sql) or die("QUERY Failed")){

    $output = mysqli_fetch_all($query,MYSQLI_ASSOC);

    echo json_encode($output);

}else{

    echo json_encode(array("massage" => "No Records Found" , "status" => false));
    
}