<?php

header("Content-Type: application/json");

$data = file_get_contents("php://input");

$user = json_decode($data, true);

$name = $user["name"];

$response = array(
    "status" => "success",
    "message" => "Welcome, " . $name . "!"
);

echo json_encode($response);

?>
