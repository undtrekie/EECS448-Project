<?php
$dir = 'accounts/';
$accounts1 = scandir($dir);
if (in_array(['field3' . '-' . 'field4' . '.txt'],$accounts1, true))
{
  $my_file = 'accounts/success.txt';
  $handle = fopen($my_file, 'w') or die('Cannot open file: DNE');
  file_put_contents($handle,'field3' . '-' . 'field4' . '.txt')
  fclose($handle);
} else {
  echo "Wrong account number or password!";
}
?>
