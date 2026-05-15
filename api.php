<?php

header("Content-Type: application/json");

$data = [
   "success" => true,
   "message" => "API Working successfully",
   "user" => [
      "name" => "Rudresh Manoj Sankpal",
      "role" => "Backend Developer",
      "email" => "rudresh@gmail.com"
   ]
];

echo json_encode($data);

?>