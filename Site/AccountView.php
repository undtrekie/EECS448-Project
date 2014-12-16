<?php
    $filename = $_POST['field1'];
	$arr = $_POST['field2'];
	$arr = str_replace('[','',$arr);
	$arr = str_replace(']','',$arr);
	$arr = str_replace('"','',$arr);
	$arr = str_replace(',',"\n",$arr);
    $ret = file_put_contents($filename, $arr, LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
		header('Location:https://undtrekie.no-ip.biz/');
		//echo "$arr";
    }
?>