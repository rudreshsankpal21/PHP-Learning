<?php 
$english = 98;
$maths = 90;
$science = 95;

$total = $english + $maths + $science;
$percentage = ($total / 300) * 100;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Marks Percentage Calculator</h1>

    <h2>Total Marks: <?php echo $total; ?></h2>
    <h2>Percentage: <?php echo $percentage; ?></h2>

     <?php
     
        if ($percentage >= 35) {
            echo "<h2>Pass</h2>";
        } else {
            echo "<h2>Fail</h2>";
        }


     ?>

</body>
</html>