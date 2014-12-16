<?php
$dir = 'accounts/';
$accounts1 = scandir($dir);
$file = 'accounts/success.txt';
$data = $_POST['field4'] . '-' . $_POST['field5'] . '.txt';
if (in_array($data,$accounts1, false))
{

file_put_contents($file,$data, LOCK_EX);
header( 'Location: https://undtrekie.no-ip.biz/AccountView.html' ) ;

} else {
var_dump($accounts1);

header( 'Location: https://undtrekie.no-ip.biz/' ) ;

}
?>
