<?php
$dir = '/accounts';
$accounts1 = scandir($dir);
if (in_array(['field1' . '-' . 'field2' . '.txt'],$accounts1, true))
{
  fwrite('success.txt','field1' . '-' . 'field2' . '.txt')
}
else
{
  echo "Incorrect Account or Password";
}

?>
