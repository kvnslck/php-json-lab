<?php

$data = file_get_contents("php://input");

$user = json_decode($data, true);

echo "Username: " . $user["username"] . "<br>";
echo "Password: " . $user["password"];

?>
