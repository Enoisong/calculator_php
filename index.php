<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Result</title>
</head>
<body>

<form action = "index.php" method = "post">
    First num <input type = "number" name = "num1"> <br>
    OP:  <input type = "text" name = "op"> <br>
    Second num <input type = "number" name = "num2"> <br>
    <input type = "submit">

 
    // $num1 = $_POST["num1"];
    // $num2 = $_POST["num2"];
    // $op = $_POST["op"];
//     $result = 0;

//     if ($op == "+") {
//         echo $num1 + $num2;
//     } elseif ($op == "-") {
//         echo $num1 - $num2;
//     } elseif ($op == "*") {
//         echo $num1 * $num2;
//     } elseif ($op == "/") {
//         echo $num1 / $num2;        
//     } else {
//         echo "invalid Operator"; 
//     }     
    
// ?>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Form Calculator</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Form Calculator</h1>
    <div>
      <form action="addition.php" method="get">
        <h2>Addition</h2>
        <input type="number" name="add_num1" id="add_num1" required />
        <input type="number" name="add_num2" id="add_num2" required />
        <input type="submit" value="Submit" />
      </form>
      <form action="subtraction.php" method="get">
        <h2>Subtraction</h2>
        <input type="number" name="subtract_num1" id="subtract_num1" required />
        <input type="number" name="subtract_num2" id="subtract_num2" required />
        <input type="submit" value="Submit" />
      </form>
      <form action="multiplication.php" method="get">
        <h2>Multiplication</h2>
        <input type="number" name="multiply_num1" id="multiply_num1" required />
        <input type="number" name="multiply_num2" id="multiply_num2" required />
        <input type="submit" value="Submit" />
      </form>
      <form action="division.php" method="get">
        <h2>Division</h2>
        <input type="number" name="dividend" id="dividend" required />
        <input type="number" name="divisor" id="divisor" required />
        <input type="submit" value="Submit" />
      </form>
      <a href="index.php">Reset</a>
    </div>
  </body>
</html>
