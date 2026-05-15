<?php 
header("Content-Type: application/json");

$name = "Rudresh";
$time = date("H");

if ($time  < 12) {
    $response = [
        "success" => true,
        "greeting" => "Good Morning " . $name,
    ];
} else if ($time < 18) {
$response = [
        "success" => true,
        "greeting" => "Good Afternoon " . $name,
    ];
    } else if ($time < 22) {
        $response = [
        "success" => true,
        "greeting" => "Good Evening " . $name,
    ];
    } else {
        $response = [
        "success" => true,
        "greeting" => "Good Night " . $name,
    ];
    }

echo json_encode($response);

?>