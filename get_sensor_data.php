<?php
// Simulate sensor data
$sensorData = array("temperature" => rand(20, 30), "humidity" => rand(30, 70));
header('Content-Type: application/json');
echo json_encode($sensorData);
?>
