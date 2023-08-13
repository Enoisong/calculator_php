<!DOCTYPE html>
<html>
  <head>
    <title>Addition</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
   <?="<p>The sum of ${_GET["add_num1"]} and ${_GET["add_num2"]} is " . ($_GET["add_num1"] + $_GET["add_num2"]) . ".</p>"; ?>
   <a href="index.php">Go Back</a>
  </body>
</html>