<html>
</body>

<?php
if(!isset ($_POST['submit'])){

  ?>
<form method="post" action="file.php">
File name: <input type="text" name="filename"><br>
Number of lines: <input type="text" name="number_of_line"><br>
<input type="submit">
</form>

<?php
} else {
  $filename = $_POST['filename'];
  $number_of_line = $_POST['number_of_line'];

echo "Return the last $number_of_line lines in file $filename.";
}
?>
<?php

$filename = "somefile.txt";
$total_lines = count(file($filename));
$number_of_line =
$prompt = "Read file:";



echo "There are $total_lines lines in $filename.";

/** I'm not even making a change right now
I'm just being completely ridiculous.
It's fine.
**/

/**function tail($filename, $number_of_line) {

}
**/

?>
</body>
</html>
