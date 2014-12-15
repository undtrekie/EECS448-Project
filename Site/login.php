<?php
$dir = 'accounts/';
$accounts1 = scandir($dir);
if (in_array(['field3' . '-' . 'field4' . '.txt'],$accounts1, true))
fwrite('success.txt','field3' . '-' . 'field4' . '.txt')
?>
