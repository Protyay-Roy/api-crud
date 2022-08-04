<?php

// header("Content-Type: application/json");
// header("Access-Control-Allow-Origin: * ");
// header("Access-Control-Allow-Method: PUT ");
// header("Access-Control-Allow-Header: Access-Control-Allow-Header, Content-Type, Access-Control-Allow-Method, Authorization, X-Requested-With ");

// include("config.php");

// $data = json_decode(file_get_contents('php://input'),true);

// $id= $data["sid"];
// $name = $data["sname"];
// $age = $data["sage"];
// $city = $data["scity"];

// $sql = "UPDATE `curd` SET `student_name`='{$name}',`age`='{$sage}',`city`='{$scity}' WHERE id = {$id} ";

// if(mysqli_query($con,$sql) or die("QUERY Failed")){

//     echo json_encode(array("massage" => "Student Record Update Successful", "status" => true));

// }else{

//     echo json_encode(array("massage" => "Student Record Update Not Successful", "status" => false));

// }

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['sid'];
$name = $data['sname'];
$age = $data['sage'];
$city = $data['scity'];

include "config.php";

$sql = "UPDATE crud SET student_name = '{$name}', age = {$age}, city = '{$city}' WHERE id = {$id}";

if(mysqli_query($con, $sql)){

	echo json_encode(array('massage' => 'Student Record Updated.', 'status' => true));
}else{

  echo json_encode(array('massage' => 'Student Record Not Updated.', 'status' => false));
}
?>
