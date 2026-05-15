<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Calculator</h1>

    <?php
    $a = 10;
    $b = 20;



    ?>


    <h1>Addition: <?php echo $a + $b; ?> </h1>
    <h1>Subtraction: <?php echo $a - $b; ?> </h1>
    <h1>Multiplication: <?php echo $a * $b; ?> </h1>
    <h1>Division: <?php if ($b == 0) {
        echo "Cannot divide by zero";
    } else {
        echo $a / $b;
    } ?> </h1>

</body>

</html>