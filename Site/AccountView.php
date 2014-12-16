<?php
	$arr = json_decode($_POST['jsondata']);
	$filename = $_POST['field1'];
	$ret = file_put_contents($filename, $arr, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
        header( 'Location: https://undtrekie.no-ip.biz/' );
    }
?>
