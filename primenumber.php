<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>prime numbers</title>
</head>
<body>

<?php
    for($i = 1; $i <= 100; $i++){
      $mm = 0;
      for($j = 2; $j <= $i/2; $j++) {
        //only not prime number
                if ($i % $j == 0) {
                  $mm=1;
                  break;
                }
      }
      if ($mm == 0) {
                echo"$i is prime number<br/>";
      }
    }
  ?>



</body>
</html>