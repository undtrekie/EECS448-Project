<?php
$dir = 'accounts/';
$accounts1 = scandir($dir);
if (in_array(['field3' . '-' . 'field4' . '.txt'],$accounts1, true))
{
  $my_file = 'success.txt';
  $handle = fopen($my_file, 'w') or die('Cannot open file: DNE');
  fwrite($handle,'field3' . '-' . 'field4' . '.txt')
  fclose($handle);
} else {
  echo "Wrong account number or password!";
}
?>
