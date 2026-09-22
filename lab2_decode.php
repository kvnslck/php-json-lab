<?php

$json = '{"name":"Joshua","age":20,"email":"joshua@gmail.com"}';

$object = json_decode($json);

$array = json_decode($json, true);

echo "Object: " . $object->name . "<br>";
echo "Object Email: " . $object->email . "<br>";

echo "Array: " . $array["name"] . "<br>";
echo "Array Email: " . $array["email"];

?>
