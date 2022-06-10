<?php 
include __DIR__ . "/../database.php";
$albums_json = json_encode($database);
header("Content-Type: application/json");
echo $albums_json;
?>