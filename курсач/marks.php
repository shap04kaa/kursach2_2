<?php
require("connectdb.php");

$query1 = "SELECT latitude FROM parkings LIMIT 1;"; // Ширина 
$result1 = $connect->query($query1);
$latitude = $result1->fetch_assoc()['latitude'];

$query2 = "SELECT longitude FROM parkings LIMIT 1;"; // Долгота 
$result2 = $connect->query($query2);
$longitude = $result2->fetch_assoc()['longitude'];

?> 


