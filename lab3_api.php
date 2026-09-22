<?php

header("Content-Type: application/json");

$student = array(
    "id" => 7,
    "name" => "Joshua",
    "email" => "joshua@gmail.com",
    "status" => "active"
);

echo json_encode($student);

?>
