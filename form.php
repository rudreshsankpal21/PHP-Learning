<!DOCTYPE html>
<html>
<head>
   <title>PHP Form</title>
</head>
<body>

<form method="GET">

   <input type="text" name="username" placeholder="Enter name">

   <button type="submit">Submit</button>

</form>

<?php

if(isset($_GET['username'])){

   $username = $_GET['username'];

   echo "<h2>Hello " . $username . "</h2>";
}

?>

</body>
</html>