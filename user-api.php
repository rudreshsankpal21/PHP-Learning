<?php
header("Content-Type: application/json");

$userData = [
    "success" => true,
    "message" => "API Working successfully",
    "user" => [
        "name" => "Rudresh",
        "role" => "Developer",
        "city" => "Solapur",
    ]
];

echo json_encode($userData);

?>