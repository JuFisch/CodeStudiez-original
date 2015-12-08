<!DOCTYPE html>
<title>PHP template</title>
<body>
  <?php
  $value = 8;

  echo "Value is now {$value}.<br />";

  $value += 2;
  echo "Add 2. Value is now {$value}.<br />";

  $value -= 4;
  echo "Subtract 4. Value is now {$value}.<br />";

  $value *= 5;
  echo "Multiply by 5. Value is now {$value}.<br />";

  $value /= 3;
  echo "Divide by 3. Value is now 10.<br />";

  $value++;
  echo "Increment value by 1. Value is now {$value}.<br />";

  $value--;
  echo "Increment value by 1. Value is now {$value}.<br />";

  $name = "Harry";
  $age = 28;

  var_dump($name);
  echo "<br />";

  print_r($name);
  echo "<br />";

  ?>
</body>
</html>
