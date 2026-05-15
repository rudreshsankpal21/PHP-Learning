<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>Student Details</h1>

<?php
$name = "Rudresh";
$age = 20;
$course = "Computer Science";
$city = "Solapur";


// echo "My name is " . $name . "<br>";
// echo "Age is ". $age ."<br>";
// echo "Course is ". $course ."<br>";
// echo "City is ". $city ."<br>";

?>

<h1>My name is <?php echo $name; ?> </h1>
<h1>Age is <?php echo $age; ?> </h1>
<h1>I study <?php echo $course; ?> </h1>
<h1>I live in <?php echo $city; ?> </h1>

</body>
</html>